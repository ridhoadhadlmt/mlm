<?php

use App\Models\Network;
use App\Models\Pin;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home');
});
Breadcrumbs::for('network', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Network', route('network'));
});
Breadcrumbs::for('network.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('network');
    $trail->push('Create', route('network.create'));
});
Breadcrumbs::for('network.show', function (BreadcrumbTrail $trail, Network $network): void {
    $trail->parent('network');
    $trail->push($network->id, route('network.show', $network));
});


// Breadcrumbs::for('network.edit', function (BreadcrumbTrail $trail, User $project): void {
//     $trail->parent('network.show');

//     $trail->push('Edit', route('network.edit', $network));
// });
Breadcrumbs::for('pin', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Pin', route('pin'));
});
Breadcrumbs::for('productOrder', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Riwayat Produk', route('productOrder'));
});
Breadcrumbs::for('withDrawal', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Penarikan Hadiah', route('withDrawal'));
});
Breadcrumbs::for('settingWithdrawal', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Pengaturan Penarikan', route('settingWithdrawal'));
});
Breadcrumbs::for('settingAccount', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Pengaturan Akun', route('settingAccount'));
});

