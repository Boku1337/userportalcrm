<?php /* Smarty version Smarty-3.1.19, created on 2021-09-15 15:08:14
         compiled from "/var/www/html/layouts/default/templates/Portal/partials/IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17774623436141e22e0ebd80-99066351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba93aeaa54f66a011cf711f09432353f85a0e23' => 
    array (
      0 => '/var/www/html/layouts/default/templates/Portal/partials/IndexContentBefore.tpl',
      1 => 1523550033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17774623436141e22e0ebd80-99066351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6141e22e0ed408_06364647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6141e22e0ed408_06364647')) {function content_6141e22e0ed408_06364647($_smarty_tpl) {?>


<div class="navigation-controls-row">
<div ng-if="checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}
</div>
</div>
    <div class="row portal-controls-row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-8">
		<div ng-if="!checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}</div>
            <div class="btn-group btn-group-justified" ng-if="checkRecordsVisibility(filterPermissions)">
                <div class="btn-group">
                    <button type="button" translate="Mine"
                            ng-class="{'btn btn-default btn-primary':searchQ.onlymine, 'btn btn-default':!searchQ.onlymine}" ng-click="searchQ.onlymine=true"></button>
                </div>
                <div class="btn-group">
                    <button type="button" translate = "All"
                            ng-class="{'btn btn-default btn-primary':!searchQ.onlymine, 'btn btn-default':searchQ.onlymine}" ng-click="searchQ.onlymine=false"></button>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
          <div class="addbtnContainer" ng-if="isCreatable">
            <button class="btn btn-primary" ng-click="createRecord(module)">New {{ptitle}}</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          &nbsp;
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <button class="btn btn-primary" ng-if="exportEnabled" ng-csv="exportRecords(module)" csv-header="csvHeaders" add-bom="true" filename="{{filename}}.csv">{{'Export'|translate}}&nbsp;{{ptitle}}</button>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pagination-holder">
            <div class="pull-right">
                <div class="text-center">
                    <pagination
                        total-items="totalPages" max-size="3" ng-model="currentPage" ng-change="pageChanged(currentPage)" boundary-links="true">
                    </pagination>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>
