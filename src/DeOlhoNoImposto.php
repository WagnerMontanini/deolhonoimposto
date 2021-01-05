<?php

namespace WagnerMontanini\DeOlhoNoImposto;

/**
 * Class DeOlhoNoImposto
 * @package WagnerMontanini\DeOlhoNoImposto
 */
abstract class DeOlhoNoImposto
{
    /** @var string */
    private $apiUrl;

    /** @var string */
    private $token;

    /** @var array */
    private $fields;

    /** @var string */
    private $endpoint;

    /** @var string */
    private $method;

    /** @var object */
    protected $response;

    /**
     * DeOlhoNoImposto constructor.
     * @param string $versao
     * @param string $token
     */
    public function __construct(string $versao, string $token)
    {
        $this->apiUrl = "https://apidoni.ibpt.org.br/api/{$versao}";
        $this->token = $token;
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $fields
     * @param array|null $headers
     */
    protected function request(string $method, string $endpoint, array $fields): void
    {
        $this->method = $method;
        $this->endpoint = $endpoint;
        $this->fields = $fields;

        $this->dispatch();
    }

    /**
     * @return object|null
     */
    public function response()
    {
        return $this->response;
    }

    /**
     * @return object|null
     */
    public function error()
    {
        if (!empty($this->response->errors)) {
            return $this->response->errors;
        }

        return null;
    }

    /**
     *
     */
    private function dispatch(): void
    {
        $curl = curl_init();

        $this->fields['token'] = $this->token;

        $this->fields = (!empty($this->fields) ? http_build_query($this->fields) : null);
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "{$this->apiUrl}{$this->endpoint}?{$this->fields}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->method,
            CURLOPT_HTTPHEADER => [],
        ));

        $this->response = json_decode(curl_exec($curl));
        curl_close($curl);
    }
}