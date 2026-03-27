<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Cabo HDMI 2.0 4K 2 metros',
                'codigo_barras' => '7891234567890',
                'descricao' => 'Cabo de alta velocidade para vídeo ultra HD.',
                'preco_antigo' => 45.90,
                'preco_atual' => 29.90,
                'preco_de_custo' => 15.00,
                'quantidade' => 50,
                'marca' => 'Foccus Tech',
                'categoria' => 'Acessórios',
                'destaque' => true,
                'ativo' => true,
            ],
            [
                'nome' => 'Mouse Wireless Silent',
                'codigo_barras' => '7891234567891',
                'descricao' => 'Mouse sem fio com clique silencioso e 1600 DPI.',
                'preco_antigo' => null,
                'preco_atual' => 89.00,
                'preco_de_custo' => 40.00,
                'quantidade' => 25,
                'marca' => 'Logi',
                'categoria' => 'Periféricos',
                'destaque' => false,
                'ativo' => true,
            ],
            [
                'nome' => 'Teclado Mecânico RGB G-Pro',
                'codigo_barras' => '7891234567892',
                'descricao' => 'Teclado mecânico com switch azul e iluminação customizável.',
                'preco_antigo' => 350.00,
                'preco_atual' => 279.90,
                'preco_de_custo' => 180.00,
                'quantidade' => 10,
                'marca' => 'Foccus Tech',
                'categoria' => 'Periféricos',
                'destaque' => true,
                'ativo' => true,
            ],
            [
                'nome' => 'Adaptador USB-C para Ethernet',
                'codigo_barras' => '7891234567893',
                'descricao' => 'Adaptador de rede Gigabit para notebooks modernos.',
                'preco_antigo' => null,
                'preco_atual' => 120.00,
                'preco_de_custo' => 55.00,
                'quantidade' => 100,
                'marca' => 'Generic',
                'categoria' => 'Adaptadores',
                'destaque' => false,
                'ativo' => true,
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}