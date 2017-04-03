<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MetatagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MetatagsTable Test Case
 */
class MetatagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MetatagsTable
     */
    public $Metatags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.metatags',
        'app.users_tags',
        'app.users',
        'app.tags',
        'app.communities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Metatags') ? [] : ['className' => 'App\Model\Table\MetatagsTable'];
        $this->Metatags = TableRegistry::get('Metatags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Metatags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
