<?php
    declare(strict_types=1);

    namespace App\Helpers;

    class Country_helper
    {

		public static function countriesData(): array
		{
			return [
				[
					'country' => 'Albania',
					'language' => 'Albanian',
					'phoneCode' => '355',
					'languageIsoCode' => 'sq',
					'countryIsoCode' => 'al',
					'flag' => 'al.png'
                ],
				[
                    'country' => 'Belarus',
                    'language' => 'Belarusian',
                    'phoneCode' => '375',
                    'languageIsoCode' => 'be',
                    'countryIsoCode' => 'by',
                    'flag' =>
                    'by.png'
                ],
				[
					'country' => 'Belgium',
					'language' => 'Dutch',
					'phoneCode' => '32',
					'languageIsoCode' => 'nl',
					'countryIsoCode' => 'be',
					'flag' => 'be.png',
					'currency' => 'EUR'
				],
				[
                    'country' => 'Bosnia and Herzegovina',
                    'language' => 'Bosnian',
                    'phoneCode' => '387',
                    'languageIsoCode' => 'bs',
                    'countryIsoCode' => 'ba',
                    'flag' => 'ba.png'
                ],
				[
                    'country' => 'Bulgaria',
                    'language' => 'Bulgarian',
                    'phoneCode' => '359',
                    'languageIsoCode' => 'bg',
                    'countryIsoCode' => 'bg',
                    'flag' => 'bg.png'
                ],
				['country' => 'China', 'language' => 'Chinese', 'phoneCode' => '86', 'languageIsoCode' => 'zh', 'countryIsoCode' => 'cn', 'flag' => 'cn.png'],
				[
					'country' => 'Croatia',
					'language' => 'Croatian',
					'phoneCode' => '385',
					'languageIsoCode' => 'hr',
					'countryIsoCode' => 'hr',
					'flag' => 'hr.png'
				],
				['country' => 'Czech Republic', 'language' => 'Czech', 'phoneCode' => '420', 'languageIsoCode' => 'cs', 'countryIsoCode' => 'cz', 'flag' => 'cz.png'],
				['country' => 'Denmark', 'language' => 'Danish', 'phoneCode' => '45', 'languageIsoCode' => 'da', 'countryIsoCode' => 'dk', 'flag' => 'dk.png'],
				['country' => 'Estonia', 'language' => 'Estonian', 'phoneCode' => '372', 'languageIsoCode' => 'et', 'countryIsoCode' => 'ee', 'flag' => 'ee.png'],
				['country' => 'Finland', 'language' => 'Finnish', 'phoneCode' => '358', 'languageIsoCode' => 'fi', 'countryIsoCode' => 'fi', 'flag' => 'fi.png'],
				['country' => 'France', 'language' => 'French', 'phoneCode' => '33', 'languageIsoCode' => 'fr', 'countryIsoCode' => 'fr', 'flag' => 'fr.png'],
				['country' => 'Georgia', 'language' => 'Georgian', 'phoneCode' => '995', 'languageIsoCode' => 'ka', 'countryIsoCode' => 'ge', 'flag' => 'ge.png'],
				['country' => 'Germany', 'language' => 'German', 'phoneCode' => '49', 'languageIsoCode' => 'de', 'countryIsoCode' => 'de', 'flag' => 'de.png'],
				['country' => 'Greece', 'language' => 'Greek', 'phoneCode' => '30', 'languageIsoCode' => 'el', 'countryIsoCode' => 'gr', 'flag' => 'gr.png'],
				['country' => 'Hungary', 'language' => 'Hungarian', 'phoneCode' => '36', 'languageIsoCode' => 'hu', 'countryIsoCode' => 'hu', 'flag' => 'hu.png'],
				['country' => 'Ireland', 'language' => 'Irish', 'phoneCode' => '353', 'languageIsoCode' => 'ga', 'countryIsoCode' => 'ie', 'flag' => 'ie.png'],
				['country' => 'Israel', 'language' => 'Hebrew', 'phoneCode' => '972', 'languageIsoCode' => 'he', 'countryIsoCode' => 'il', 'flag' => 'il.png'],
				['country' => 'Italy', 'language' => 'Italian', 'phoneCode' => '39', 'languageIsoCode' => 'it', 'countryIsoCode' => 'it', 'flag' => 'it.png'],
				['country' => 'Japan', 'language' => 'Japanese', 'phoneCode' => '81', 'languageIsoCode' => 'ja', 'countryIsoCode' => 'jp', 'flag' => 'jp.png'],
				['country' => 'Latvia', 'language' => 'Latvian', 'phoneCode' => '371', 'languageIsoCode' => 'lv', 'countryIsoCode' => 'lv', 'flag' => 'lv.png'],
				['country' => 'Lithuania', 'language' => 'Lithuanian', 'phoneCode' => '370', 'languageIsoCode' => 'lt', 'countryIsoCode' => 'lt', 'flag' => 'lt.png'],
				[
					'country' => 'Netherlands',
					'language' => 'Dutch',
					'phoneCode' => '31',
					'languageIsoCode' => 'nl',
					'countryIsoCode' => 'nl',
					'flag' => 'nl.png',
					'currency' => 'EUR'
				],
				['country' => 'Norway', 'language' => 'Norwegian', 'phoneCode' => '47', 'languageIsoCode' => 'no', 'countryIsoCode' => 'no', 'flag' => 'no.png'],
				['country' => 'Poland', 'language' => 'Polish', 'phoneCode' => '48', 'languageIsoCode' => 'pl', 'countryIsoCode' => 'pl', 'flag' => 'pl.png'],
				['country' => 'Portugal', 'language' => 'Portuguese', 'phoneCode' => '351', 'languageIsoCode' => 'pt', 'countryIsoCode' => 'pt', 'flag' => 'pt.png'],
				['country' => 'Romania', 'language' => 'Romanian', 'phoneCode' => '40', 'languageIsoCode' => 'ro', 'countryIsoCode' => 'ro', 'flag' => 'ro.png'],
				['country' => 'Russia', 'language' => 'Russian', 'phoneCode' => '7', 'languageIsoCode' => 'ru', 'countryIsoCode' => 'ru', 'flag' => 'ru.png'],
				['country' => 'Saudi Arabia', 'language' => 'Arabic', 'phoneCode' => '966', 'languageIsoCode' => 'ar', 'countryIsoCode' => 'sa', 'flag' => 'sa.png'],
				['country' => 'Serbia', 'language' => 'Serbian', 'phoneCode' => '381', 'languageIsoCode' => 'sr', 'countryIsoCode' => 'rs', 'flag' => 'rs.png'],
				['country' => 'South Korea', 'language' => 'Korean', 'phoneCode' => '82', 'languageIsoCode' => 'ko', 'countryIsoCode' => 'kr', 'flag' => 'kr.png'],
				['country' => 'Spain', 'language' => 'Spanish', 'phoneCode' => '34', 'languageIsoCode' => 'es', 'countryIsoCode' => 'es', 'flag' => 'es.png'],
				['country' => 'Sweden', 'language' => 'Swedish', 'phoneCode' => '46', 'languageIsoCode' => 'sv', 'countryIsoCode' => 'se', 'flag' => 'se.png'],
				['country' => 'Turkey', 'language' => 'Turkish', 'phoneCode' => '90', 'languageIsoCode' => 'tr', 'countryIsoCode' => 'tr', 'flag' => 'tr.png'],
				['country' => 'Ukraine', 'language' => 'Ukrainian', 'phoneCode' => '380', 'languageIsoCode' => 'uk', 'countryIsoCode' => 'ua', 'flag' => 'ua.png'],
				[
					'country' => 'United Arab Emirates',
					'language' => 'Arabic',
					'phoneCode' => '971',
					'languageIsoCode' => 'ar',
					'countryIsoCode' => 'ae',
					'flag' => 'ae.png',
					'currency' => 'AED'
				],
				[
					'country' => 'United States',
					'language' => 'English',
					'phoneCode' => '1',
					'languageIsoCode' => 'en',
					'countryIsoCode' => 'us',
					'flag' => 'us.png',
					'currency' => 'USD'
				],
				[
					'country' => 'United Kingdom',
					'language' => 'English',
					'phoneCode' => '44',
					'languageIsoCode' => 'en',
					'countryIsoCode' => 'gb',
					'flag' => 'gb.png',
					'currency' => 'GBP'
				]
			];

		}

        public static function sortCountriesData(string $sortBy): array
        {
            $countriesList = self::countriesData();

            uasort($countriesList, function($a, $b) use($sortBy) {
                return $a[$sortBy] <=> $b[$sortBy];
            });

            return $countriesList;
        }

    }
