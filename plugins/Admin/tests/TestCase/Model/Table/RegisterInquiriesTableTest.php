<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\RegisterInquiriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\RegisterInquiriesTable Test Case
 */
class RegisterInquiriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.register_inquiries',
        'plugin.admin.members',
        'plugin.admin.type_companies',
        'plugin.admin.productions',
        'plugin.admin.inquiries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegisterInquiries') ? [] : ['className' => 'Admin\Model\Table\RegisterInquiriesTable'];
        $this->RegisterInquiries = TableRegistry::get('RegisterInquiries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegisterInquiries);

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
