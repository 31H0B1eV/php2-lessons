<?php

namespace App\Models;

interface Orderable
    extends HasWeight
{

    public function getPrice();

}