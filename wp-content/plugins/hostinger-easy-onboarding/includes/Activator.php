<?php

namespace Hostinger\EasyOnboarding;

use Hostinger\EasyOnboarding\Admin\Onboarding\WelcomeCards;
use Hostinger\EasyOnboarding\DefaultOptions;
use Hostinger\WpHelper\Utils;
use Hostinger\EasyOnboarding\WooCommerce\Options as WooCommerceOptions;

defined( 'ABSPATH' ) || exit;

class Activator {

	public static function activate(): void {
		$options = new DefaultOptions();
		$options->add_options();

		self::update_installation_state_on_activation();
        self::update_onboarding_state_on_activation();
	}

	/**
	 * Saves installation state.
	 */
	public static function update_installation_state_on_activation(): void {
		$installation_state = get_option( 'hts_new_installation', false );

		if ( $installation_state !== 'old' ) {
			add_option( 'hts_new_installation', 'new' );
		}
	}

    /**
     * Enable onboarding
     *
     * @return void
     */
    public static function update_onboarding_state_on_activation(): void {
        $onboarding_choice_done = get_option( 'hostinger_onboarding_choice_done', null );

        if ( $onboarding_choice_done === null && is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
            $woocommerceOptions = new WooCommerceOptions();

            $woocommerceOptions->hideSetupTaskList();
            $woocommerceOptions->disableWooCommerceShipingZoneCreation();
            $woocommerceOptions->skipOnboarding();
        }
    }
}
