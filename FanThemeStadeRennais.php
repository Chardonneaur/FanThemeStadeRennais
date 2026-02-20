<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\FanThemeStadeRennais;

use Piwik\Plugin;

class FanThemeStadeRennais extends Plugin
{
    public function registerEvents(): array
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles): void
    {
        // === BACKGROUNDS — neutral, readable ===
        $themeStyles->colorBackgroundBase          = '#F5F5F5';
        $themeStyles->colorBackgroundContrast      = '#FFFFFF';
        $themeStyles->colorBackgroundHighContrast  = '#1A1A1A';
        $themeStyles->colorBackgroundTinyContrast  = '#F0F0F0';
        $themeStyles->colorBackgroundLowContrast   = '#E0E0E0';

        // === TEXT — dark for readability ===
        $themeStyles->colorText         = '#1A1A1A';
        $themeStyles->colorTextLight    = '#333333';
        $themeStyles->colorTextLighter  = '#555555';
        $themeStyles->colorTextContrast = '#1A1A1A';

        // === BRAND — Rouge Rennais ===
        $themeStyles->colorBrand         = '#E30613';
        $themeStyles->colorBrandContrast = '#FFFFFF';

        // === SERIES — red for graphs ===
        $themeStyles->colorBaseSeries = '#E30613';

        // === LINKS ===
        $themeStyles->colorLink = '#C00010';

        // === HEADER — noir with white text ===
        $themeStyles->colorHeaderBackground = '#1A1A1A';
        $themeStyles->colorHeaderText       = '#FFFFFF';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#E30613';

        // === BORDERS ===
        $themeStyles->colorBorder = '#CCCCCC';

        // === CODE ===
        $themeStyles->colorCode           = '#F5F5F5';
        $themeStyles->colorCodeBackground = '#1A1A1A';

        // === MENU ===
        $themeStyles->colorMenuContrastText         = '#1A1A1A';
        $themeStyles->colorMenuContrastTextSelected = '#E30613';
        $themeStyles->colorMenuContrastTextActive   = '#E30613';
        $themeStyles->colorMenuContrastBackground   = '#FFFFFF';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground            = '#FFFFFF';
        $themeStyles->colorWidgetBorder                = '#E8E8E8';
        $themeStyles->colorWidgetTitleText             = '#1A1A1A';
        $themeStyles->colorWidgetTitleBackground       = '#FFFFFF';
        $themeStyles->colorWidgetExportedBackgroundBase = '#FFFFFF';

        // === FOCUS ===
        $themeStyles->colorFocusRing            = '#E30613';
        $themeStyles->colorFocusRingAlternative = '#C00010';
    }
}
