<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 */
class ArticlesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor ',
                'body' => 'Lorem ipsum dolor sit amet',
                'date' => 1641614226,
                'notice' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
