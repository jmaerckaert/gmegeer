<?php

declare(strict_types = 1);

namespace Drupal\ethpillar_monitoring\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\ethpillar_monitoring\Entity\EthpillarIncident;

/**
 * Controller for logging Ethpillar incidents via JSON:API.
 */
class EthpillarIncidentController extends ControllerBase {

  /**
   * Accepts POST requests to create a new EthpillarIncident.
   *
   * @param Request $request
   *   HTTP request containing JSON:API payload.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   JSON status message.
   */
  public function createIncident(Request $request): JsonResponse {
    // Vérification du token d'authentification
    $expected_token = $this->config('ethpillar_monitoring.settings')->get('api_token');
    $provided = $request->headers->get('X-Auth-Token');
    if ($provided !== $expected_token) {
      return new JsonResponse(['error' => 'Unauthorized'], 403);
    }

    $content = json_decode($request->getContent(), TRUE);
    $attrs = $content['data']['attributes'] ?? [];

    if (empty($attrs['hostname']) || empty($attrs['status'])) {
      return new JsonResponse(['error' => 'hostname and status required'], 400);
    }

    /** @var \Drupal\ethpillar_monitoring\Entity\EthpillarIncident $incident */
    $incident = EthpillarIncident::create([
      'hostname' => $attrs['hostname'],
      'status' => $attrs['status'],
    ]);
    $incident->save();

    return new JsonResponse(['message' => 'Incident logged'], 201);
  }
}
