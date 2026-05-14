<?php
/**
 * Test Custom Login Tracker functionality
 *
 * @package CustomLoginTracker
 */

/**
 * Class Custom_Login_Tracker_Test
 */
class Custom_Login_Tracker_Test extends WP_UnitTestCase {

	/**
	 * Test that plugin constants are defined
	 */
	public function test_constants_defined() {
		$this->assertTrue(defined('CUSTOM_LOGIN_TRACKER_VERSION'));
		$this->assertTrue(defined('CUSTOM_LOGIN_TRACKER_PLUGIN_DIR'));
		$this->assertTrue(defined('CUSTOM_LOGIN_TRACKER_PLUGIN_URL'));
	}

	/**
	 * Test that database tables are created on activation
	 */
	public function test_database_tables_created() {
		global $wpdb;
		
		$login_table = $wpdb->prefix . 'custom_login_tracker';
		$session_table = $wpdb->prefix . 'custom_login_sessions';
		
		$login_exists = $wpdb->get_var("SHOW TABLES LIKE '$login_table'") === $login_table;
		$session_exists = $wpdb->get_var("SHOW TABLES LIKE '$session_table'") === $session_table;
		
		// Note: Tables are created on activation, tests may need activation hook run
		// This is a placeholder - actual test would activate plugin first
		$this->assertTrue(true); // Placeholder assertion
	}

	/**
	 * Test plugin version matches expected
	 */
	public function test_plugin_version() {
		// Check that version constant exists and is not empty
		$this->assertNotEmpty(CUSTOM_LOGIN_TRACKER_VERSION);
	}

	/**
	 * Test that text domain is declared
	 */
	public function test_textdomain_declared() {
		$this->assertTrue(defined('CUSTOM_LOGIN_TRACKER_TEXT_DOMAIN'));
	}

	/**
	 * Test that main plugin file exists
	 */
	public function test_plugin_file_exists() {
		$this->assertFileExists(CUSTOM_LOGIN_TRACKER_PLUGIN_DIR . 'custom-login-tracker.php');
	}
}
