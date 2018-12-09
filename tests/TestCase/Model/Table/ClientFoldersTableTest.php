<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientFoldersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientFoldersTable Test Case
 */
class ClientFoldersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientFoldersTable
     */
    public $ClientFolders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_folders',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClientFolders') ? [] : ['className' => ClientFoldersTable::class];
        $this->ClientFolders = TableRegistry::getTableLocator()->get('ClientFolders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientFolders);

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
