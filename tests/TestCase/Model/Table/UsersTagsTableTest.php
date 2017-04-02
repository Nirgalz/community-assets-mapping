<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTagsTable Test Case
 */
class UsersTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTagsTable
     */
    public $UsersTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_tags',
        'app.users',
        'app.communities',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersTags') ? [] : ['className' => 'App\Model\Table\UsersTagsTable'];
        $this->UsersTags = TableRegistry::get('UsersTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersTags);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
