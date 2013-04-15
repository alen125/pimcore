<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tballmann
 * Date: 05.04.13
 * Time: 13:11
 * To change this template use File | Settings | File Templates.
 */

interface OnlineShop_Framework_Pricing_IEnvironment
{
    /**
     * @param OnlineShop_Framework_ICart $cart
     *
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    public function setCart(OnlineShop_Framework_ICart $cart);

    /**
     * @return OnlineShop_Framework_ICart
     */
    public function getCart();

    /**
     * @param OnlineShop_Framework_AbstractProduct $product
     *
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    public function setProduct(OnlineShop_Framework_AbstractProduct $product);

    /**
     * @return OnlineShop_Framework_AbstractProduct
     */
    public function getProduct();

    /**
     * @param OnlineShop_Framework_Pricing_IRule $rule
     *
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    public function setRule($rule);

    /**
     * @return OnlineShop_Framework_Pricing_IRule
     */
    public function getRule();

    /**
     * @param OnlineShop_Framework_Pricing_IPriceInfo $priceInfo
     *
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    public function setPriceInfo(OnlineShop_Framework_Pricing_IPriceInfo $priceInfo);

    /**
     * @return OnlineShop_Framework_Pricing_IPriceInfo
     */
    public function getPriceInfo();

    /**
     * @param array $categories
     *
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    public function setCategories(array $categories);

    /**
     * @return array|OnlineShop_Framework_AbstractCategory
     */
    public function getCategories();


    #public function setTenant();
    #public function getTenant();

    /**
     * @param int $userId
     * @return OnlineShop_Framework_Pricing_IEnvironment
     */
    #public function setUserId($userId);

    /**
     * @return int
     */
    #public function getUserId();
}