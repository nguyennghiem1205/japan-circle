<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegisterInquiriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegisterInquiriesTable Test Case
 */
class RegisterInquiriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.register_inquiries',
        'app.members',
        'app.type_companies',
        'app.productions',
        'app.company_inquiries',
        'app.inquiries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegisterInquiries') ? [] : ['className' => 'App\Model\Table\RegisterInquiriesTable'];
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
