<?php

use Illuminate\Database\Seeder;
use App\Models\ModelSupplier;
use App\Models\ModelEmployee;
use App\Models\ModelEmployeeType;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelSupplier $supplier, ModelEmployee $employee, ModelEmployeeType $etype)
    {
       
        $supplier->create([
            'nmFornecedor' => 'SkinCare',
            'cnpj' => '00.378.257/0001-88',
            'telefone'  => '(31) 3455-3243',
            'email' => 'skc@gmail.com'
        ]);

        $supplier->create([
            'nmFornecedor' => 'Brilho Capilar',
            'cnpj' => '00.378.257/0001-23',
            'telefone'  => '(31) 3334-2321',
            'email' => 'brilhoCapilar@gmail.com'
        ]);

        $supplier->create([
            'nmFornecedor' => 'Cremes da Lu',
            'cnpj' => '00.378.257/0001-82',
            'telefone'  => '(31) 3455-3212',
            'email' => 'luciana@cosmeticos.com'
        ]);

        $supplier->create([
            'nmFornecedor' => 'Beleza Rara',
            'cnpj' => '00.348.257/0001-22',
            'telefone'  => '(31) 3422-3212',
            'email' => 'belezarar@gmail.com'
        ]);

        $etype->create([
            'nmFuncao' => 'Gerente',
            'salarioBase' => 500
        ]);

        $etype->create([
            'nmFuncao' => 'Secretário(a)',
            'salarioBase' => 300
        ]);
        
        $etype->create([
            'nmFuncao' => 'Atendente',
            'salarioBase' => 200
        ]);

        
        $etype->create([
            'nmFuncao' => 'Serviços Gerais',
            'salarioBase' => 200
        ]);
        
        $employee->create([
            'nmFuncionario' => 'Emanuelly Carvalho',
            'sexo' => 'Feminino',
            'dtNasc' => '2003-02-20',
            'cpf' => '151.118.976-21',
            'telefone' => '(31) 98870-5937',
            'email' => 'manu.eu.2022@gmail.com',
            'senha' => '123456',
            'numero' => '165',
            'cep' => '35170-200',
            'rua' => 'Jonas Soares Camargo',
            'bairro' => 'Surinan',
            'cidade' => 'Coronel Fabriciano',
            'complemento' => 'Ao lado da igreja',
            'cdTipoFuncionario' => 2
        ]);

        $employee->create([
            'nmFuncionario' => 'Fernando Souza',
            'sexo' => 'Masculino',
            'dtNasc' => '2002-12-12',
            'cpf' => '151.118.996-21',
            'telefone' => '(31) 98321-5937',
            'email' => 'fernandoSouza@gmail.com',
            'senha' => '123456',
            'numero' => '133',
            'cep' => '35170-200',
            'rua' => 'Jonas Soares Camargo',
            'bairro' => 'Surinan',
            'cidade' => 'Coronel Fabriciano',
            'complemento' => 'Em frente a igreja',
            'cdTipoFuncionario' => 2
        ]);

        $employee->create([
            'nmFuncionario' => 'Lorena Souza',
            'sexo' => 'Feminino',
            'dtNasc' => '2002-02-05',
            'cpf' => '151.243.996-21',
            'telefone' => '(31) 98321-2345',
            'email' => 'itsMeLorena@gmail.com',
            'senha' => '123456',
            'numero' => '144 A',
            'cep' => '35170-200',
            'rua' => 'Jonas Soares Camargo',
            'bairro' => 'Surinan',
            'cidade' => 'Coronel Fabriciano',
            'complemento' => 'Na rua da igreja',
            'cdTipoFuncionario' => 2
        ]);

    }
}
