<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientVideosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientVideosTable Test Case
 */
class ClientVideosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientVideosTable
     */
    public $ClientVideos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_videos',
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
        $config = TableRegistry::getTableLocator()->exists('ClientVideos') ? [] : ['className' => ClientVideosTable::class];
        $this->ClientVideos = TableRegistry::getTableLocator()->get('ClientVideos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientVideos);

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
