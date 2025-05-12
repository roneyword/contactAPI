<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            [
                "abbreviation" => "RO",
                "name" => "Rondônia"
              ],
              [
                "abbreviation" => "AC",
                "name" => "Acre"
              ],
              [
                "abbreviation" => "AM",
                "name" => "Amazonas"
              ],
              [
                "abbreviation" => "RR",
                "name" => "Roraima"
              ],
              [
                "abbreviation" => "PA",
                "name" => "Pará"
              ],
              [
                "abbreviation" => "AP",
                "name" => "Amapá"
              ],
              [
                "abbreviation" => "TO",
                "name" => "Tocantins"
              ],
              [
                "abbreviation" => "MA",
                "name" => "Maranhão"
              ],
              [
                "abbreviation" => "PI",
                "name" => "Piauí"
              ],
              [
                "abbreviation" => "CE",
                "name" => "Ceará"
              ],
              [
                "abbreviation" => "RN",
                "name" => "Rio Grande do Norte"
              ],
              [
                "abbreviation" => "PB",
                "name" => "Paraíba"
              ],
              [
                "abbreviation" => "PE",
                "name" => "Pernambuco"
              ],
              [
                "abbreviation" => "AL",
                "name" => "Alagoas"
              ],
              [
                "abbreviation" => "SE",
                "name" => "Sergipe"
              ],
              [
                "abbreviation" => "BA",
                "name" => "Bahia"
              ],
              [
                "abbreviation" => "MG",
                "name" => "Minas Gerais"
              ],
              [
                "abbreviation" => "ES",
                "name" => "Espírito Santo"
              ],
              [
                "abbreviation" => "RJ",
                "name" => "Rio de Janeiro"
              ],
              [
                "abbreviation" => "SP",
                "name" => "São Paulo"
              ],
              [
                "abbreviation" => "PR",
                "name" => "Paraná"
              ],
              [
                "abbreviation" => "SC",
                "name" => "Santa Catarina"
              ],
              [
                "abbreviation" => "RS",
                "name" => "Rio Grande do Sul"
              ],
              [
                "abbreviation" => "MS",
                "name" => "Mato Grosso do Sul"
              ],
              [
                "abbreviation" => "MT",
                "name" => "Mato Grosso"
              ],
              [
                "abbreviation" => "GO",
                "name" => "Goiás"
              ],
              [
                "abbreviation" => "DF",
                "name" => "Distrito Federal"
              ],       
        ];
    
        foreach ($states as $state) {
            \App\Models\State::create($state);
        }
    }
}
