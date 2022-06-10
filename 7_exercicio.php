<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela de produtos HTML com PHP</title>
        <meta name="author" content="Avilla Gabriella"/>
        <meta name="keywords" content="php, tabela, produtos, html"/>
        <meta name="description" content="Tabela de produtos com html, bootstrap e php"/>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            
            .modal-body img{
                width: 100%;
                margin: 0px auto;
                /*object-fit: contain;*/
                height: 540px;
            }
        </style>
    </head>
<body>
<?php
    $produto1 = ["id" => 1,
            "nome" => "Vestido Diva Laranja", 
            "preco" => "R$ 77,00",
            "descricao" => "Fashion is the trend of consumption today. Fashion is made up of several styles which may have been influenced in several ways. It accompanies the clothing and the time, that is integrated to the simple use of the clothes in the day to day.",
            "imagem" => "./assets/img/vestido.webp"
        ];

    $produto2 = ["id" => 2,
            "nome" => "Saia",
            "preco" => "R$ 44,00",
            "descricao" => "Fashion is the trend of consumption today. Fashion is made up of several styles which may have been influenced in several ways. It accompanies the clothing and the time, that is integrated to the simple use of the clothes in the day to day.",
            "imagem" => "./assets/img/saia.webp"
            ];

    $produto3 = ["id" => 3,
            "nome" => "Moletom",
            "preco" => "R$ 110,00",
            "descricao" => "Fashion is the trend of consumption today. Fashion is made up of several styles which may have been influenced in several ways. It accompanies the clothing and the time, that is integrated to the simple use of the clothes in the day to day.",
            "imagem" => "./assets/img/moletom.webp"
            ];

    $produto4 = ["id" => 4,
            "nome" => "Calça Jeans",
            "preco" => "R$ 99,00",
            "descricao" => "Fashion is the trend of consumption today. Fashion is made up of several styles which may have been influenced in several ways. It accompanies the clothing and the time, that is integrated to the simple use of the clothes in the day to day.",
            "imagem" => "./assets/img/calca.webp"
            ];

    $produto5 = ["id" => 5,
            "nome" => "Cropped",
            "preco" => "R$ 29,99",
            "descricao" => "Fashion is the trend of consumption today. Fashion is made up of several styles which may have been influenced in several ways. It accompanies the clothing and the time, that is integrated to the simple use of the clothes in the day to day.",
            "imagem" => "./assets/img/cropped.webp"
            ];

    $produtos = [$produto1, $produto2, $produto3, $produto4, $produto5];
?>
<div class="container">
    <table class="table table-hover table-striped mt-5">
        <h1 class="mt-5 text-center">Tabela de Roupas.</h1>
        <hr/>
        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>imagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    foreach($produtos as $produto){

                        echo "<tr>
                                <td width='240'><strong>{$produto['nome']}</strong></td>
                                <td width='180'>{$produto['preco']}</td>
                                <td><p>{$produto['descricao']}</p></td>
                                <td><button type='button' class='btn btn-outline-light' data-bs-toggle='modal' data-bs-target='#JanelaModal{$produto['id']}'><img src='{$produto['imagem']}' width='180'/></button></td>
                            </tr>
                            <div id='JanelaModal{$produto['id']}' class='modal' tabindex='-1' role='dialog'>
                                    <div class='modal-dialog modal-lg' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title'><strong>{$produto['nome']}</strong></h5>
                                                <button type='button' class='close btn btn-dark' data-bs-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                                <img src='{$produto['imagem']}'/>
                                            </div>
                                        </div>
                                    </div>
                            </div>";
                    }
            ?>
        </tbody>
    </table>
</div>
 

</body>
</html>