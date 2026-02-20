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
        // === BRAND — Rouge Rennais dominates ===
        $themeStyles->colorBrand         = '#E30613';
        $themeStyles->colorBrandContrast = '#FFFFFF';

        // === HEADER — Noir with white text ===
        $themeStyles->colorHeaderBackground = '#1A1A1A';
        $themeStyles->colorHeaderText       = '#FFFFFF';

        // === LINKS — deep red for contrast on white ===
        $themeStyles->colorLink = '#B20010';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#1A1A1A';

        // === TEXT — near-black ===
        $themeStyles->colorText         = '#1A1A1A';
        $themeStyles->colorTextLight    = '#2D2D2D';
        $themeStyles->colorTextLighter  = '#555555';
        $themeStyles->colorTextContrast = '#1A1A1A';

        // === BACKGROUNDS — clean white/light for readability ===
        $themeStyles->colorBackgroundBase         = '#F4F4F4';
        $themeStyles->colorBackgroundContrast     = '#FFFFFF';
        $themeStyles->colorBackgroundHighContrast = '#1A1A1A';
        $themeStyles->colorBackgroundTinyContrast = '#EFEFEF';
        $themeStyles->colorBackgroundLowContrast  = '#E2E2E2';

        // === BORDERS — subtle dark ===
        $themeStyles->colorBorder = '#CCCCCC';

        // === SERIES — rouge primary, noir secondary ===
        $themeStyles->colorBaseSeries = '#E30613';

        // === MENU (left sidebar) ===
        $themeStyles->colorMenuContrastText         = '#1A1A1A';
        $themeStyles->colorMenuContrastTextSelected = '#E30613';
        $themeStyles->colorMenuContrastTextActive   = '#E30613';
        $themeStyles->colorMenuContrastBackground   = '#FFFFFF';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground             = '#FFFFFF';
        $themeStyles->colorWidgetBorder                 = '#E8E8E8';
        $themeStyles->colorWidgetTitleText              = '#1A1A1A';
        $themeStyles->colorWidgetTitleBackground        = '#FFFFFF';
        $themeStyles->colorWidgetExportedBackgroundBase = '#FFFFFF';

        // === CODE ===
        $themeStyles->colorCode           = '#F4F4F4';
        $themeStyles->colorCodeBackground = '#1A1A1A';

        // === FOCUS ===
        $themeStyles->colorFocusRing            = '#E30613';
        $themeStyles->colorFocusRingAlternative = '#B20010';
    }
}
