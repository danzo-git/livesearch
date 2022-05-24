<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return [
            [
                'title'=> 'title',
                'description' => 'Title',
                
            ],
            
           
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Post::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post');
        CRUD::setEntityNameStrings('post', 'posts');
    }

    /**
     * Define what happens when the List operation is loaded.
     *  
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
       // 
        CRUD::column('id_categorie');
        CRUD::column('title');
        CRUD::addColumn([  // Select
            'label'     => "Categorie",
            'type'      => 'select',
            'name'      => 'nom_categorie', // the db column for the foreign key
         
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'Categorie',
            
            // optional - manually specify the related model and attribute
            'model'     => "App\Models\CategoriePost", // related model
            'attribute' => 'nom_categorie', // foreign key attribute that is shown to user
         
            // optional - force the related options to be a custom query, instead of all();
            // 'options'   => (function ($query) {
            //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            //  }),
              //  you can use this to filter the results show in the select
            ]);
        CRUD::column('description');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when th e Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostRequest::class);

        CRUD::field('title');
        CRUD::field('description');
        
        CRUD::addField([  // Select
            'label'     => "Categorie",
            'type'      => 'select2',
            'name'      => 'id_categorie', // the db column for the foreign key
         
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'Categorie',
            
            // optional - manually specify the related model and attribute
            'model'     => "App\Models\CategoriePost", // related model
            'attribute' => 'nom_categorie', // foreign key attribute that is shown to user
         
            // optional - force the related options to be a custom query, instead of all();
            // 'options'   => (function ($query) {
            //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            //  }),
              //  you can use this to filter the results show in the select
            ]);

          /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
        $this->crud->set('show.setFromDb', false);
    $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
