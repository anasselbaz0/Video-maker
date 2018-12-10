<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientImagesTable Test Case
 */
class ClientImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientImagesTable
     */
    public $ClientImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_images',
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
        $config = TableRegistry::getTableLocator()->exists('ClientImages') ? [] : ['className' => ClientImagesTable::class];
        $this->ClientImages = TableRegistry::getTableLocator()->get('ClientImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientImages);

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
