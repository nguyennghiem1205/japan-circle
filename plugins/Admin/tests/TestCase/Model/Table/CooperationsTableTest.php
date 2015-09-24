<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CooperationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CooperationsTable Test Case
 */
class CooperationsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.cooperations',
        'plugin.admin.members',
        'plugin.admin.needs',
        'plugin.admin.company_inquiries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cooperations') ? [] : ['className' => 'Admin\Model\Table\CooperationsTable'];
        $this->Cooperations = TableRegistry::get('Cooperations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cooperations);

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
