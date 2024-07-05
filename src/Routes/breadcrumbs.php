<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

/**
 * Profile routes.
 */
Breadcrumbs::for('wtshop.customer.profile.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('shop::app.customer.account.profile.index.title'), route('wtshop.customer.profile.index'));
});

Breadcrumbs::for('wtshop.customer.profile.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');
});

/**
 * Order routes.
 */
Breadcrumbs::for('wtshop.customer.orders.index', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');

    $trail->push(trans('shop::app.customer.account.order.index.page-title'), route('wtshop.customer.orders.index'));
});

Breadcrumbs::for('wtshop.customer.orders.view', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('wtshop.customer.orders.index');
});

/**
 * Downloadable products.
 */
Breadcrumbs::for('wtshop.customer.downloadable_products.index', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');

    $trail->push(trans('shop::app.customer.account.downloadable_products.title'), route('wtshop.customer.downloadable_products.index'));
});

/**
 * Wishlists.
 */
Breadcrumbs::for('wtshop.customer.wishlist.index', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');

    $trail->push(trans('shop::app.customer.account.wishlist.page-title'), route('wtshop.customer.wishlist.index'));
});

/**
 * Reviews.
 */
Breadcrumbs::for('wtshop.customer.reviews.index', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');

    $trail->push(trans('shop::app.customer.account.review.index.page-title'), route('wtshop.customer.reviews.index'));
});

/**
 * Addresses.
 */
Breadcrumbs::for('wtshop.customer.addresses.index', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.profile.index');

    $trail->push(trans('shop::app.customer.account.address.index.page-title'), route('wtshop.customer.addresses.index'));
});

Breadcrumbs::for('wtshop.customer.addresses.create', function (BreadcrumbTrail $trail) {
    $trail->parent('wtshop.customer.addresses.index');

    $trail->push(trans('shop::app.customer.account.address.create.page-title'), route('wtshop.customer.addresses.create'));
});

Breadcrumbs::for('wtshop.customer.addresses.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('wtshop.customer.addresses.index');

    $trail->push(trans('shop::app.customer.account.address.edit.page-title'), route('wtshop.customer.addresses.edit', $id));
});
