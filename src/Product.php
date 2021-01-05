<?php

namespace WagnerMontanini\DeOlhoNoImposto;

/**
 * Class Product
 * @package WagnerMontanini\DeOlhoNoImposto
 */
class Product extends DeOlhoNoImposto
{
    /**
     * Product constructor
     * @param string $versao
     * @param string $token
     */
    public function __construct(string $versao, string $token)
    {
        parent::__construct($versao, $token);
    }

    /**
     * @param array $fields
     * @return Product
     */
    public function product(array $fields): Product
    {
        $this->request(
            "GET",
            "/produtos",
            $fields
        );

        return $this;
    }

}