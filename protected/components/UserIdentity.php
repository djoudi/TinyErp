<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $_unit = 'No Default Unit';
    private $_menu = array();

    public function authenticate() {
        $users = array(
            // username => password
            'demo' => 'demo',
            'admin' => 'admin',
            'test1' => 'pass1',
        );
        if (!isset($users[$this->username]))
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($users[$this->username] !== $this->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else{
            $this->errorCode = self::ERROR_NONE;

        /*
         * Set menu according to user role
         * make generator function from database model
         * set static for now, make dinamic later
         */
//        $this->_menu = array(
//            'items' => array(
//                array('label' => 'Home', 'url' => array('/site/index'), 'itemOptions' => array('class' => 'test')),
//                array('label' => 'Admin Tools',
//                    'items' => array(
//                        array('label' => 'Users', 'url' => array('/admin/index')),
//                        array('label' => 'User to Organization', 'url' => array('/admin/index')),
//                        array('label' => 'Authentification & Roles', 'url' => array('/admin/index')),
//                    ),
//                    'visible' => false,
//                ),
//                array('label' => 'Data Master',
//                    'items' => array(
//                        array('label' => 'Organization', 'url' => array('/master/org')),
//                        array('label' => 'Branch', 'url' => array('/master/branch')),
//                        array('label' => 'Suppliers', 'url' => array('/master/supp')),
//                        array('label' => 'Customers', 'url' => array('/master/cust'),
//                            'items' => array(
//                                array('label' => 'Districs', 'url' => array('/master/cats')),
//                                array('label' => 'Kecamatan', 'url' => array('/master/cats')),
//                                array('label' => 'Customer Groups', 'url' => array('/master/cats')),//MT,GT
//                                array('label' => 'Customer Class', 'url' => array('/sales/admin')),//SUPER_MARKET,MINI_MARKET,WARUNG,DLL.
//                                array('label' => 'Customer Detail', 'url' => array('/master/cats'),
//                                    'items'=>array(
//                                        array('label' => 'Create New', 'url' => array('/master/cats')),
//                                        array('label' => 'Manage Exits', 'url' => array('/master/cats')),
//                                    )),
//                            )
//                        ),
//                        array('label' => 'Items Master', 'url' => array('/master/items'),
//                            'items' => array(
//                                array('label' => 'Categories', 'url' => array('/master/cats')),
//                                array('label' => 'Types', 'url' => array('/master/cats')), 
//                                array('label' => 'Uom', 'url' => array('/master/cats')), 
//                                array('label' => 'Items Master', 'url' => array('/master/cats')), 
//                                array('label' => 'Items to Vendors', 'url' => array('/master/cats')), 
//                                array('label' => 'Items to Customers', 'url' => array('/master/cats')), 
//                                array('label' => 'Items to Principals', 'url' => array('/master/cats')),  
//                            )
//                        ),
//                    ),
//                ),
//                array('label' => 'Purcahasing', 'url' => array('purch/index'),
//                    'items' => array(
//                        array('label' => 'Setup',
//                            'items' => array(
//                                array('label' => 'Costing Methode', 'url' => array('/purhc/sprice')),
//                                array('label' => 'Items to Supplier', 'url' => array('/master/item_supp')),
//                            ),
//                        ),
//                        array('label' => 'Supplier Price Request', 'url' => array('/purhc/price_req')),
//                        array('label' => 'Sales Order', 'url' => array('/purhc/receipt')),
//                        array('label' => 'Supplier Invoicing', 'url' => array('/purch/invoice_control')),
//                        array('label' => 'Reports',
//                            'items' => array(
//                                array('label' => 'Orders', 'url' => array('/purhc/orders')),
//                                array('label' => 'Receipt', 'url' => array('/purhc/receipts')),
//                                array('label' => 'Invoices', 'url' => array('/purhc/invoices')),
//                            ),
//                        ),
//                    ),
//                    'visible' => true,
//                ),
//                array('label' => 'Inventory',
//                    'items' => array(
//                        array('label' => 'Setup',
//                            'items' => array(
//                                array('label' => 'Min-Max Control', 'url' => array('/purhc/sprice')),
//                                array('label' => 'Service Level', 'url' => array('/master/item_supp')),
//                            ),
//                        ),
//                        array('label' => 'Warehouse', 'url' => array('/Whse/admin'),
//                            'items' => array(
//                                array('label' => 'Create New', 'url' => array('/Whse/create')),
//                                array('label' => 'Manage Exists', 'url' => array('/Whse/index')),
//                        )),
//                        array('label' => 'Locators', 'url' => array('/invt/create'),
//                            'items' => array(
//                                array('label' => 'Create New', 'url' => array('/Whse/create')),
//                                array('label' => 'Manage Exists', 'url' => array('/Whse/admin')),
//                        )),
//                        array('label' => 'Good Receipt', 'url' => array('/invt/admin')),
//                        array('label' => 'Stock Transfer', 'url' => array('/invt/admin')),
//                        array('label' => 'M2M Transfer', 'url' => array('/invt/admin')),
//                        array('label' => 'Movements History', 'url' => array('/invt/admin')),
//                        array('label' => 'Stock Valuation', 'url' => array('/invt/admin')),
//                        array('label' => 'Stock Opname', 'url' => array('/invt/admin')),
//                        array('label' => 'Barcode Generator', 'url' => array('/invt/admin')),
//                    ),
//                ),
//                array('label' => 'Sales & Distribution',
//                    'items' => array(
//                        array('label' => 'Setup',
//                            'items' => array(
//                                array('label' => 'Salesman', 'url' => array('/purhc/sprice')),
//                                array('label' => 'Ekspedition/Canvas', 'url' => array('/master/item_supp')),
//                                array('label' => 'Items Pricing', 'url' => array('/master/item_supp')),
//                            ),
//                        ),
//                        array('label' => 'Journey Plan', 'url' => array('/master/item_supp')),
//                        array('label' => 'Sales Orders', 'url' => array('/sales/admin')),
//                        array('label' => 'Order Delivery', 'url' => array('/sales/admin')),
//                        array('label' => 'Customer Invoicing', 'url' => array('/sales/admin')),
//                        array('label' => 'Reports',
//                            'items' => array(
//                                array('label' => 'Orders', 'url' => array('/purhc/orders')),
//                                array('label' => 'Receipt', 'url' => array('/purhc/receipts')),
//                                array('label' => 'Invoices', 'url' => array('/purhc/invoices')),
//                            ),
//                        ),
//                    ),
//                    'visible' => true,
//                ),
//                array('label' => 'Finance & Costing',
//                    'items' => array(
//                        array('label' => 'Coa', 'url' => array('/theme/index')),
//                        array('label' => 'Payment In', 'url' => array('/theme/create')),
//                        array('label' => 'Payment Out', 'url' => array('/theme/create')),
//                        array('label' => 'Reports', 'url' => array('/theme/create')),
//                    ),
//                    'visible' => false,
//                ),
//                array('label' => 'Theme Fiture',
//                    'items' => array(
//                        array('label' => 'Graphs & Charts', 'url' => array('/site/page', 'view' => 'graphs'), 'itemOptions' => array('class' => 'icon_chart')),
//                        array('label' => 'Form Elements', 'url' => array('/site/page', 'view' => 'forms')),
//                        array('label' => 'Interface Elements', 'url' => array('/site/page', 'view' => 'interface')),
//                        array('label' => 'Error Pages', 'url' => array('/site/page', 'view' => 'Demo 404 page')),
//                        array('label' => 'Calendar', 'url' => array('/site/page', 'view' => 'calendar')),
//                        array('label' => 'Buttons & Icons', 'url' => array('/site/page', 'view' => 'buttons_and_icons')),
//                    ),
//                    'visible' => false,
//                ),
//                //array('label' => 'Contact', 'url' => array('/site/contact')),
//                //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
//                array('label' => 'Logout (' . $users[$this->username] . ')', 'url' => array('/site/logout')),
//            ),
//        );
//        $this->setMMenu($this->_menu);
        }
        return !$this->errorCode;
    }

    protected function setMMenu($val) {
        $this->setState('mmenu', $val);
    }

}