<?php

use PHPUnit\Framework\TestCase;
use classes\StringHelper;

class NumberTest extends TestCase
{
    protected StringHelper $stringHelper;

    protected array $tests = [
        [
            'text' => '_On__my___home_world',
            'result' => 'On_my_home_world',
        ],
        [
            'text' => '_On__my___home_world_____',
            'result' => 'On_my_home_world',
        ],
        [
            'text' => '____On__my___home_world_____',
            'result' => 'On_my_home_world',
        ],
        [
            'text' => '____On___my___home_world_____',
            'result' => 'On_my_home_world',
        ],
        [
            'text' => 'On_my_home_world',
            'result' => 'On_my_home_world',
        ],
    ];
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringHelper = new StringHelper();
    }

    /**
     * Тестирует корректное удаление пробелов
     *
     * @return void
     */
    public function testDeleteSpaces(): void
    {
        foreach ($this->tests as $text) {
            $this->assertEquals(
                $text['result'],
                $this->stringHelper->deleteSpaces($text['text'])
            );
        }
    }
}
