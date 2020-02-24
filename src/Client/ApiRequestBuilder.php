<?php
/**
 * @author @jenschude <jens.schulze@commercetools.de>
 */

namespace Commercetools\Client;

use Commercetools\Api\Client\ApiRequestBuilder as Builder;
use Commercetools\Api\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

/**
 * @psalm-immutable
 */
class ApiRequestBuilder extends Builder
{
    /**
     * @var string
     */
    private $projectKey;

    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(string $projectKey, ClientInterface $client, array $args = [])
    {
        parent::__construct($client, $args);
        $this->projectKey = $projectKey;
    }

    public function with(): ResourceByProjectKey
    {
        return $this->withProjectKey($this->projectKey);
    }
}
