<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Translation;
use App\Country;
use App\Currency;
use App\Area;
use App\ReportingReason;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->reportreasonsTranslations();
    //    $this->currenciesTranslations();
    ///    $this->dataTypesTranslations();
       // $this->countriesTranslations();
        //$this->citiesTranslations();
     //   $this->categoriesTranslations();
       // $this->pagesTranslations();
        //$this->menusTranslations();



        $this->areasTranslations();
    }

  private function reportreasonsTranslations(){
        //$reasons = Area::find(1);
        //if ($reasons->exists) {
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 1), 'con man');
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 2), 'Improper communication');
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 3), "Violating ads");
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 4), "Sold ads");
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 5), "Offensive ads");
            $this->trans('en', $this->arr(['reporting_reasons', 'reason_text'], 6), "Other");

            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 1), 'محتال');
            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 2), 'تواصل غير لائق');
            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 3), 'اعلانات مخالفة');
            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 4), 'اعلانات مباعة');
            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 5), 'اعلانات مخلة بالآداب');
            $this->trans('ku', $this->arr(['reporting_reasons', 'reason_text'], 6), 'أخرى');

      //  }
    }


    private function areasTranslations(){
        $area = Area::find(1);
        if ($area->exists) {
            $this->trans('en', $this->arr(['areas', 'area_name'], 1), 'Nahiyah Zaweeta');
            $this->trans('en', $this->arr(['areas', 'area_name'], 2), 'Nahiyah Mankeesh');
            $this->trans('en', $this->arr(['areas', 'area_name'], 3), "Qatha' zakho");
            $this->trans('en', $this->arr(['areas', 'area_name'], 4), "Qatha' Smeel");
            $this->trans('en', $this->arr(['areas', 'area_name'], 5), "Qatha' Amadiyah");
            $this->trans('en', $this->arr(['areas', 'area_name'], 6), "Qatha' Bardarash");
            $this->trans('en', $this->arr(['areas', 'area_name'], 7), "Qatha' Akrah");
            $this->trans('en', $this->arr(['areas', 'area_name'], 8), "Qatha' Sheikhan");

            $this->trans('ku', $this->arr(['areas', 'area_name'], 1), 'ناحیەی زاویتە');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 2), 'ناحیەی مانکێش');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 3), 'قەزای زاخۆ');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 4), 'قەزای سیمێل');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 5), 'قەزای عەمادی');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 6), 'قەزای بەردەرەش');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 7), 'قەزای ئاکرێ');
            $this->trans('ku', $this->arr(['areas', 'area_name'], 8), 'قەزای شێخان');
        }
    }


    /**
     * Auto generate Country Translations.
     *
     * @return void
     */
    private function currenciesTranslations()
    {
        $currency = Currency::find(1);
        if ($currency->exists) {
            $this->trans('en', $this->arr(['currencies', 'name'], $currency->id), 'Iraq');
            $this->trans('ku', $this->arr(['currencies', 'name'], $currency->id), 'العراق');


            $this->trans('en', $this->arr(['currencies', 'code'], $currency->id), 'IQD');
            $this->trans('ku', $this->arr(['currencies', 'code'], $currency->id), 'د.ع');
        }
    }


    /**
     * Auto generate Country Translations.
     *
     * @return void
     */
    private function countriesTranslations()
    {
        $country = Country::find(1);
        if ($country->exists) {
            $this->trans('en', $this->arr(['countries', 'country_name'], $country->id), 'Iraq');
            $this->trans('ku', $this->arr(['countries', 'country_name'], $country->id), 'العراق');
        }
    }


    /**
     * Auto generate City Translations.
     *
     * @return void
     */
    private function citiesTranslations()
    {
        $this->trans('en', $this->arr(['cities', 'city_name'], 1), 'Baghdad');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 1), 'بەغداد');

        $this->trans('en', $this->arr(['cities', 'city_name'], 2), 'Duhok');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 2), 'دهۆک');

        $this->trans('en', $this->arr(['cities', 'city_name'], 3), 'Erbil');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 3), 'هەولێر');

        $this->trans('en', $this->arr(['cities', 'city_name'], 4), 'Salahadeen');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 4), 'سەلاحەدین');

        $this->trans('en', $this->arr(['cities', 'city_name'], 5), 'Diyalah');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 5), 'دیالە');

        $this->trans('en', $this->arr(['cities', 'city_name'], 6), 'Alanbar');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 6), 'ئەنبار');

        $this->trans('en', $this->arr(['cities', 'city_name'], 7), 'Waset');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 7), 'واست');

        $this->trans('en', $this->arr(['cities', 'city_name'], 8), 'Neynawah');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 8), 'نەینەوا');

        $this->trans('en', $this->arr(['cities', 'city_name'], 9), 'Babel');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 9), 'بابل');


        $this->trans('en', $this->arr(['cities', 'city_name'], 10), 'Karbala');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 10), 'کەربەلا');


        $this->trans('en', $this->arr(['cities', 'city_name'], 11), 'Alnajaf');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 11), 'نەجەف');

        $this->trans('en', $this->arr(['cities', 'city_name'], 12), 'Misan');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 12), 'مەیسان');

        $this->trans('en', $this->arr(['cities', 'city_name'], 13), 'Suleymaniyah');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 13), 'سلێمانی');


        $this->trans('en', $this->arr(['cities', 'city_name'], 14), 'Kerkuk');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 14), 'کەرکوک ');

        $this->trans('en', $this->arr(['cities', 'city_name'], 15), 'Aldiwaniyah');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 15), 'دیوانیە');



        $this->trans('en', $this->arr(['cities', 'city_name'], 16), 'Almuthana');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 16), 'موسەنا ');

        $this->trans('en', $this->arr(['cities', 'city_name'], 17), 'Thi Qar');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 17), 'زەی قار ');

        $this->trans('en', $this->arr(['cities', 'city_name'], 18), 'Albasrah');
        $this->trans('ku', $this->arr(['cities', 'city_name'], 18), 'بەسرە ');
            
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function categoriesTranslations()
    {
        // Adding translations for 'categories'
        //
        $cat = Category::where('slug', 'category-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['categories', 'slug'], $cat->id), 'categoria-1');
            $this->trans('pt', $this->arr(['categories', 'name'], $cat->id), 'Categoria 1');
        }
        $cat = Category::where('slug', 'category-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['categories', 'slug'], $cat->id), 'categoria-2');
            $this->trans('pt', $this->arr(['categories', 'name'], $cat->id), 'Categoria 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        /*$dtp = DataType::where($_fld, __('voyager::seeders.data_types.post.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Post');
        }*/
        /*$dtp = DataType::where($_fld, __('voyager::seeders.data_types.page.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Página');
        }*/
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.user.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Utilizador');
        }
        /*$dtp = DataType::where($_fld, __('voyager::seeders.data_types.category.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Categoria');
        }*/
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.menu.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Menu');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.role.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Função');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        /*$dtp = DataType::where($_fld, __('voyager::seeders.data_types.post.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Posts');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.page.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Páginas');
        }*/
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.user.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Utilizadores');
        }
        /*
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Categorias');
        }*/
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.menu.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Menus');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.role.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Funções');
        }
    }

    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_arr = $this->arr(['pages', 'title'], $page->id);
            $this->trans('pt', $_arr, 'Olá Mundo');
            /**
             * For configuring additional languages use it e.g.
             *
             * ```
             *   $this->trans('es', $_arr, 'hola-mundo');
             *   $this->trans('de', $_arr, 'hallo-welt');
             * ```
             */
            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('pt', $_arr, 'ola-mundo');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('pt', $_arr, '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>'
                ."\r\n".'<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.dashboard'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Painel de Controle');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.media'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Media');
        }
/*
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.posts'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Publicações');
        }
*/
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.users'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Utilizadores');
        }
/*
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.categories'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Categorias');
        }*/
/*
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.pages'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Páginas');
        }
*/
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.roles'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Funções');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.tools'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Ferramentas');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.menu_builder'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Menus');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.database'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Base de dados');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.settings'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Configurações');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}
