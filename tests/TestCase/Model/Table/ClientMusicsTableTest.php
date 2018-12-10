<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientMusicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientMusicsTable Test Case
 */
class ClientMusicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientMusicsTable
     */
    public $ClientMusics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_musics',
        'app.client_folders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClientMusics') ? [] : ['className' => ClientMusicsTable::class];
        $this->ClientMusics = TableRegistry::getTableLocator()->get('ClientMusics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientMusics);

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
