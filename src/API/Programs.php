<?php
namespace Kristenlk\Marketo\API;

use stdClass;

class Programs extends BaseClient {
    public function getPrograms(array $options = array())//:stdClass
    {
        if (count($options) > 0) {
            $endpoint = '/rest/asset/v1/programs.json?maxReturn=200&offset=' . $options['offset'];
        } else {
            $endpoint = '/rest/asset/v1/programs.json?maxReturn=200';
        }

        $response = $this->request("get", $endpoint);

        // If $response->getStatusCode() !== 200, throw an error - don't call getBodyObjectFromResponse(). If there are errors, the status still looks to be 200

        $responseBody = $this->getBodyObjectFromResponse($response);

        return $responseBody;
    }
}
?>