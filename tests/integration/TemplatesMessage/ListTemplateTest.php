<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{
    public function testListaComDoisProdutos()
    {
        $button = new Button('web_url', null, 'https://angular.io' );
        $product = new Product('Produto 1', 'https://cdn.worldvectorlogo.com/logos/angular-icon.svg', 'Curso de Angular', $button);

        $button = new Button('web_url', null, 'https://php.net' );
        $product2 = new Product('Produto 2', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg', 'Curso de PHP', $button);
        
        $template = new ListTemplate(1234);
        $template->add($product);
        $template->add($product2);
        $actual = $template->message('qwe');

        $expected = [
            'recipient' => [
                'id' => 1234 
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'elements' => [
                            [
                                'title' => 'Produto 1',
                                'subtitle' => 'Curso de Angular',
                                'image_url' => 'https://cdn.worldvectorlogo.com/logos/angular-icon.svg',
                                'default_action' => [
                                   'type'=>'web_url',     
                                   'url'=>'https://angular.io',     
                                ],
                            ],
                            [
                                'title' => 'Produto 2',
                                'subtitle' => 'Curso de PHP',
                                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg',
                                'default_action' => [
                                    'type'=>'web_url',     
                                    'url'=>'https://php.net', 
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}