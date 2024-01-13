<?php

class FinancialInformation
{
    use FinancialState;

    public function financialInf($client_data)
    {
        $financial_state = $this->where(['client_id' => $client_data]);
        return $financial_state;
    }
}
