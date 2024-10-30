<script type="text/javascript">document.querySelector('#topvoters-css') || document.head.appendChild(Object.assign(document.createElement('link'), { id: 'topvoters-css', rel: 'stylesheet', type: 'text/css', href: '{$css}' }));</script>

<section class="sidebox-topvoters is-widget">
    <div glow=""></div>
    <div class="topvoters-row">
        <div class="topvoters-head">
            <h3 class="head-title">{lang('title', 'sidebox_topvoters')}</h3>
            <h4 class="head-desc">{lang('desc', 'sidebox_topvoters')}</h4>
        </div>
    </div>
    <div class="topvoters-row full-h">
        <div class="topvoters-body">
            {if $accounts}
                <table>
                    <tbody>
                    {foreach from=$accounts key=key item=account}
                        <tr>
                            <td class="col-1 text-left"><span class="acc-rank">{$key + 1}</span></td>
                            <td class="col-2 text-left"><a href="{$url}profile/{$account.user_id}" class="acc-name" data-tip="{lang('tip', 'sidebox_topvoters')}" data-hasevent="1">{$account.nickname}</a></td>
                            <td class="col-3 text-right"><span class="acc-votes"><i>{$account.vote}</i> {lang('accvotes', 'sidebox_topvoters')}</span>
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            {else}
                <br/>
                {lang('nodata', 'sidebox_topvoters')}
                <br/>
                <br/>
            {/if}
        </div>
    </div>
    <div class="topvoters-row">
        <div class="topvoters-foot">
            <div class="foot-info">{lang('berewarded', 'sidebox_topvoters')}</div>
        </div>
    </div>
</section>