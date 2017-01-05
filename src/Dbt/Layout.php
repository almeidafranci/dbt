<?php

namespace Dbt;

class Layout
{
    const DBT627 = 'DBT627';

    private static $layouts = [
        'DBT627' => [
            'A' => [
                'campos' => [
                    'A01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'tipo'      => 'X',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'A02' => [
                        'nome'      => 'remessa',
                        'descricao' => 'Código de Remessa',
                        'tipo'      => '9',
                        'inicio'    => 2,
                        'fim'       => 2,
                        'tamanho'   => 1
                    ],
                    'A03' => [
                        'nome'      => 'convenio',
                        'descricao' => 'Código do Convênio',
                        'tipo'      => 'X',
                        'inicio'    => 3,
                        'fim'       => 22,
                        'tamanho'   => 20
                    ],
                    'A04' => [
                        'nome'      => 'nome_empresa',
                        'descricao' => 'Nome da Empresa',
                        'tipo'      => 'X',
                        'inicio'    => 23,
                        'fim'       => 42,
                        'tamanho'   => 20
                    ],
                    'A05' => [
                        'nome'      => 'codigo_banco',
                        'descricao' => 'Código do Banco',
                        'tipo'      => '9',
                        'inicio'    => 43,
                        'fim'       => 45,
                        'tamanho'   => 3
                    ],
                    'A06' => [
                        'nome'      => 'nome_banco',
                        'descricao' => 'Nome do Banco',
                        'tipo'      => 'X',
                        'inicio'    => 46,
                        'fim'       => 65,
                        'tamanho'   => 20
                    ],
                    'A07' => [
                        'nome'      => 'data',
                        'descricao' => 'Data de Geração',
                        'tipo'      => '9',
                        'inicio'    => 66,
                        'fim'       => 73,
                        'tamanho'   => 8
                    ],
                    'A08' => [
                        'nome'      => 'nsa',
                        'descricao' => 'Número Sequencial do Arquivo (NSA)',
                        'tipo'      => '9',
                        'inicio'    => 74,
                        'fim'       => 79,
                        'tamanho'   => 6
                    ],
                    'A09' => [
                        'nome'      => 'versao',
                        'descricao' => 'Versão do Layout',
                        'tipo'      => '9',
                        'inicio'    => 80,
                        'fim'       => 81,
                        'tamanho'   => 2
                    ],
                    'A10' => [
                        'nome'      => 'servico',
                        'descricao' => 'Identificação do Serviço',
                        'tipo'      => 'X',
                        'inicio'    => 82,
                        'fim'       => 98,
                        'tamanho'   => 17
                    ],
                    'A11' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'tipo'      => 'X',
                        'inicio'    => 99,
                        'fim'       => 150,
                        'tamanho'   => 52
                    ],
                ],
            ],
            'B' => [
                'campos' => [
                    'B01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'tipo'      => 'X',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'B02' => [
                        'nome'      => 'id_cliente_empresa',
                        'descricao' => 'Identificação do Cliente na Empresa',
                        'tipo'      => 'X',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'B03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'tipo'      => 'X',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'B04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'tipo'      => 'X',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'B05' => [
                        'nome'      => 'data',
                        'descricao' => 'Data da Opção/Exclusão',
                        'tipo'      => '6',
                        'inicio'    => 45,
                        'fim'       => 52,
                        'tamanho'   => 8
                    ],
                    'B06' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'tipo'      => 'X',
                        'inicio'    => 53,
                        'fim'       => 149,
                        'tamanho'   => 97
                    ],
                    'B07' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'tipo'      => '6',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'C' => [
                'campos' => [
                    'C01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'C02' => [
                        'nome'      => 'id_cliente_empresa',
                        'descricao' => 'Identificação do Cliente na Empresa',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'C03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'C04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'C05' => [
                        'nome'      => 'ocorrencia_1',
                        'descricao' => 'Ocorrência 1',
                        'inicio'    => 45,
                        'fim'       => 84,
                        'tamanho'   => 40
                    ],
                    'C06' => [
                        'nome'      => 'ocorrencia_2',
                        'descricao' => 'Ocorrência 2',
                        'inicio'    => 85,
                        'fim'       => 124,
                        'tamanho'   => 40
                    ],
                    'C07' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 125,
                        'fim'       => 149,
                        'tamanho'   => 97
                    ],
                    'C08' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'D' => [
                'campos' => [
                    'D01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'D02' => [
                        'nome'      => 'id_cliente_empresa_anterior',
                        'descricao' => 'Identificação do Cliente na Empresa - Anterior',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'D03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'D04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'D05' => [
                        'nome'      => 'id_cliente_empresa_atual',
                        'descricao' => 'Identificação do Cliente na Empresa - Atual',
                        'inicio'    => 45,
                        'fim'       => 69,
                        'tamanho'   => 25
                    ],
                    'D06' => [
                        'nome'      => 'ocorrencia',
                        'descricao' => 'Ocorrência',
                        'inicio'    => 70,
                        'fim'       => 129,
                        'tamanho'   => 60
                    ],
                    'D07' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 130,
                        'fim'       => 149,
                        'tamanho'   => 20
                    ],
                    'D08' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'E' => [
                'campos' => [
                    'E01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'E02' => [
                        'nome'      => 'id_cliente_empresa',
                        'descricao' => 'Identificação do Cliente na Empresa',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'E03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'E04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'E05' => [
                        'nome'      => 'data_vencimento',
                        'descricao' => 'Data do Vencimento',
                        'inicio'    => 45,
                        'fim'       => 52,
                        'tamanho'   => 8
                    ],
                    'E06' => [
                        'nome'      => 'valor',
                        'descricao' => 'Valor do Débito',
                        'inicio'    => 53,
                        'fim'       => 67,
                        'tamanho'   => 15
                    ],
                    'E07' => [
                        'nome'      => 'codigo_moeda',
                        'descricao' => 'Código da moeda',
                        'inicio'    => 68,
                        'fim'       => 69,
                        'tamanho'   => 2
                    ],
                    'E08' => [
                        'nome'      => 'uso_empresa',
                        'descricao' => 'Uso da Empresa',
                        'inicio'    => 70,
                        'fim'       => 129,
                        'tamanho'   => 60
                    ],
                    'E09' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 130,
                        'fim'       => 149,
                        'tamanho'   => 20
                    ],
                    'E10' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'F' => [
                'campos' => [
                    'F01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'F02' => [
                        'nome'      => 'id_cliente_empresa',
                        'descricao' => 'Identificação do Cliente na Empresa',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'F03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'F04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'F05' => [
                        'nome'      => 'data',
                        'descricao' => 'Data do Vencimento/Débito',
                        'inicio'    => 45,
                        'fim'       => 52,
                        'tamanho'   => 8
                    ],
                    'F06' => [
                        'nome'      => 'valor',
                        'descricao' => 'Valor Original/Debitado',
                        'inicio'    => 53,
                        'fim'       => 67,
                        'tamanho'   => 15
                    ],
                    'F07' => [
                        'nome'      => 'codigo_retorno',
                        'descricao' => 'Código de Retorno',
                        'inicio'    => 68,
                        'fim'       => 69,
                        'tamanho'   => 2
                    ],
                    'F08' => [
                        'nome'      => 'uso_empresa',
                        'descricao' => 'Uso da Empresa',
                        'inicio'    => 70,
                        'fim'       => 139,
                        'tamanho'   => 70
                    ],
                    'F09' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 140,
                        'fim'       => 149,
                        'tamanho'   => 10
                    ],
                    'F10' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'H' => [
                'campos' => [
                    'H01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'H02' => [
                        'nome'      => 'id_cliente_empresa_anterior',
                        'descricao' => 'Identificação do Cliente na Empresa - Anterior',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'H03' => [
                        'nome'      => 'agencia',
                        'descricao' => 'Agência para Débito',
                        'inicio'    => 27,
                        'fim'       => 30,
                        'tamanho'   => 4
                    ],
                    'H04' => [
                        'nome'      => 'id_cliente_banco',
                        'descricao' => 'Identificação do Cliente no Banco',
                        'inicio'    => 31,
                        'fim'       => 44,
                        'tamanho'   => 14
                    ],
                    'H05' => [
                        'nome'      => 'id_cliente_empresa_atual',
                        'descricao' => 'Identificação do Cliente na Empresa - Atual',
                        'inicio'    => 45,
                        'fim'       => 69,
                        'tamanho'   => 25
                    ],
                    'H06' => [
                        'nome'      => 'ocorrencia',
                        'descricao' => 'Ocorrência',
                        'inicio'    => 70,
                        'fim'       => 127,
                        'tamanho'   => 58
                    ],
                    'H07' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 128,
                        'fim'       => 149,
                        'tamanho'   => 22
                    ],
                    'H08' => [
                        'nome'      => 'codigo_movimento',
                        'descricao' => 'Código do Movimento',
                        'inicio'    => 150,
                        'fim'       => 150,
                        'tamanho'   => 1
                    ],
                ],
            ],
            'I' => [
                'campos' => [
                    'I01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'I02' => [
                        'nome'      => 'id_cliente_empresa',
                        'descricao' => 'Identificação do Cliente na Empresa',
                        'inicio'    => 2,
                        'fim'       => 26,
                        'tamanho'   => 25
                    ],
                    'I03' => [
                        'nome'      => 'tipo_id',
                        'descricao' => 'Tipo de Identificação do Consumidor/Contribuinte',
                        'inicio'    => 27,
                        'fim'       => 27,
                        'tamanho'   => 1
                    ],
                    'I04' => [
                        'nome'      => 'id',
                        'descricao' => 'CNPJ/CPF',
                        'inicio'    => 28,
                        'fim'       => 41,
                        'tamanho'   => 14
                    ],
                    'I05' => [
                        'nome'      => 'nome',
                        'descricao' => 'Nome do Consumidor/Contribuinte',
                        'inicio'    => 42,
                        'fim'       => 81,
                        'tamanho'   => 40
                    ],
                    'I06' => [
                        'nome'      => 'cidade',
                        'descricao' => 'Cidade do Consumidor/Contribuinte',
                        'inicio'    => 82,
                        'fim'       => 111,
                        'tamanho'   => 30
                    ],
                    'I07' => [
                        'nome'      => 'estado',
                        'descricao' => 'Estado do Consumidor/Contribuinte',
                        'inicio'    => 112,
                        'fim'       => 113,
                        'tamanho'   => 2
                    ],
                    'I08' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 114,
                        'fim'       => 150,
                        'tamanho'   => 37
                    ],
                ],
            ],
            'J' => [
                'campos' => [
                    'J01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'J02' => [
                        'nome'      => 'nsa',
                        'descricao' => 'Número Seqüêncial do Arquivo (NSA) processado',
                        'inicio'    => 2,
                        'fim'       => 7,
                        'tamanho'   => 6
                    ],
                    'J03' => [
                        'nome'      => 'data_geracao',
                        'descricao' => 'Data da Geração do Arquivo',
                        'inicio'    => 8,
                        'fim'       => 15,
                        'tamanho'   => 8
                    ],
                    'J04' => [
                        'nome'      => 'total_registros',
                        'descricao' => 'Total de registros do Arquivo processado',
                        'inicio'    => 16,
                        'fim'       => 21,
                        'tamanho'   => 6
                    ],
                    'J05' => [
                        'nome'      => 'valor_total',
                        'descricao' => 'Valor Total do Arquivo processado',
                        'inicio'    => 22,
                        'fim'       => 38,
                        'tamanho'   => 17
                    ],
                    'J06' => [
                        'nome'      => 'data_processamento',
                        'descricao' => 'Data de Processamento do arquivo',
                        'inicio'    => 39,
                        'fim'       => 46,
                        'tamanho'   => 8
                    ],
                    'J07' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 47,
                        'fim'       => 150,
                        'tamanho'   => 104
                    ],
                ],
            ],
            'L' => [
                'campos' => [
                    'L01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'L02' => [
                        'nome'      => 'data_faturamento',
                        'descricao' => 'Data do Faturamento das Contas',
                        'inicio'    => 2,
                        'fim'       => 9,
                        'tamanho'   => 8
                    ],
                    'L03' => [
                        'nome'      => 'data_vencimento',
                        'descricao' => 'Data do Vencimento da Fatura',
                        'inicio'    => 10,
                        'fim'       => 17,
                        'tamanho'   => 8
                    ],
                    'L04' => [
                        'nome'      => 'data_remessa_arquivo',
                        'descricao' => 'Data de Remessa do Arquivo ao Banco',
                        'inicio'    => 18,
                        'fim'       => 25,
                        'tamanho'   => 8
                    ],
                    'L05' => [
                        'nome'      => 'data_remessa_contas',
                        'descricao' => 'Data de Remessa das Contas Físicas',
                        'inicio'    => 26,
                        'fim'       => 33,
                        'tamanho'   => 8
                    ],
                    'L06' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 34,
                        'fim'       => 150,
                        'tamanho'   => 117
                    ],
                ],
            ],
            'T' => [
                'campos' => [
                    'T01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'T02' => [
                        'nome'      => 'total_registros',
                        'descricao' => 'Total de registros debitados',
                        'inicio'    => 2,
                        'fim'       => 7,
                        'tamanho'   => 6
                    ],
                    'T03' => [
                        'nome'      => 'valor_total',
                        'descricao' => 'Valor total dos registros debitados',
                        'inicio'    => 8,
                        'fim'       => 24,
                        'tamanho'   => 17
                    ],
                    'T04' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 25,
                        'fim'       => 150,
                        'tamanho'   => 126
                    ],
                ],
            ],
            'X' => [
                'campos' => [
                    'X01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'X02' => [
                        'nome'      => 'codigo_agencia',
                        'descricao' => 'Código da Agência',
                        'inicio'    => 2,
                        'fim'       => 5,
                        'tamanho'   => 4
                    ],
                    'X03' => [
                        'nome'      => 'nome',
                        'descricao' => 'Nome da Agência',
                        'inicio'    => 6,
                        'fim'       => 35,
                        'tamanho'   => 30
                    ],
                    'X04' => [
                        'nome'      => 'endereco',
                        'descricao' => 'Endereço da Agência',
                        'inicio'    => 25,
                        'fim'       => 65,
                        'tamanho'   => 30
                    ],
                    'X05' => [
                        'nome'      => 'numero',
                        'descricao' => 'Número ',
                        'inicio'    => 66,
                        'fim'       => 70,
                        'tamanho'   => 5
                    ],
                    'X06' => [
                        'nome'      => 'cep',
                        'descricao' => 'Código do CEP',
                        'inicio'    => 71,
                        'fim'       => 75,
                        'tamanho'   => 5
                    ],
                    'X07' => [
                        'nome'      => 'sufixo_cep',
                        'descricao' => 'Sufixo do CEP',
                        'inicio'    => 76,
                        'fim'       => 78,
                        'tamanho'   => 3
                    ],
                    'X08' => [
                        'nome'      => 'cidade',
                        'descricao' => 'Nome da Cidade',
                        'inicio'    => 79,
                        'fim'       => 98,
                        'tamanho'   => 20
                    ],
                    'X09' => [
                        'nome'      => 'estado',
                        'descricao' => 'Sigla do Estado',
                        'inicio'    => 99,
                        'fim'       => 100,
                        'tamanho'   => 2
                    ],
                    'X10' => [
                        'nome'      => 'situacao',
                        'descricao' => 'Situação da Agência',
                        'inicio'    => 101,
                        'fim'       => 101,
                        'tamanho'   => 1
                    ],
                    'X11' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'inicio'    => 102,
                        'fim'       => 150,
                        'tamanho'   => 49
                    ],
                ],
            ],
            'Z' => [
                'campos' => [
                    'Z01' => [
                        'nome'      => 'registro',
                        'descricao' => 'Código do Registro',
                        'tipo'      => 'X',
                        'inicio'    => 1,
                        'fim'       => 1,
                        'tamanho'   => 1
                    ],
                    'Z02' => [
                        'nome'      => 'total_registros',
                        'descricao' => 'Total de registros do arquivo',
                        'tipo'      => '9',
                        'inicio'    => 2,
                        'fim'       => 7,
                        'tamanho'   => 6
                    ],
                    'Z03' => [
                        'nome'      => 'valor_total',
                        'descricao' => 'Valor total dos registros do arquivo',
                        'tipo'      => '9',
                        'inicio'    => 8,
                        'fim'       => 24,
                        'tamanho'   => 17
                    ],
                    'Z04' => [
                        'nome'      => 'futuro',
                        'descricao' => 'Reservado para o futuro',
                        'tipo'      => 'X',
                        'inicio'    => 25,
                        'fim'       => 150,
                        'tamanho'   => 126
                    ],
                ],
            ],
        ],
    ];

    public static function getFieldConfigs($type, $layout)
    {
        return self::$layouts[$layout][$type]['campos'];
    }
}