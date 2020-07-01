<?php

namespace PPM\User\Entities;

use Maatwebsite\Excel\Concerns\ToModel;

class UserExcel implements ToModel
{
    /**
     * @param array $row
     *
     * @return array
     */
    public function model(array $row)
    {

        return $row;
    }
}
