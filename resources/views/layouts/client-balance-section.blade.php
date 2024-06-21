
@php 
$netexposure=QueryHelper::total_netexposure(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
$total_balancedown=QueryHelper::total_balancedown(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
$total_balanceup=QueryHelper::total_balanceup(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
$available_credit=QueryHelper::total_availablecredit(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
$avail_balance = 0;
                        $admin_balance = QueryHelper::getAdminBalance(Auth::guard('client')->user()->id);
                        if($admin_balance){
                            $avail_balance = $admin_balance->balance;
                        }
@endphp
<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; padding: 1rem 1rem; background-color: gray;">
    <div style="flex: 1;">
        <ul style="list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; margin: 0; padding: 0;">
            <!--<li style="flex: 1; margin-bottom: 0.5rem; color:white;">Balance Down: <span style="color: red; font-weight:bold; font-size: large;">{{ $total_balancedown ?? '0.00' }}</span></li>-->
            <!--<li style="flex: 1; margin-bottom: 0.5rem; color:white;">Balance Up: <span style="color: green; font-weight:bold; font-size: large;">{{ $total_balanceup ?? '0.00' }}</span></li>-->
            <!--<li style="flex: 1; margin-bottom: 0.5rem; color:white;">Net Exposure: <span style="color: {{ $netexposure > 0 ? 'green' : 'red' }}; font-weight:bold; font-size: large;">{{ $netexposure ?? '0.00' }}</span></li>-->
            <li style="flex: 1; margin-bottom: 0.5rem; color:white;">Available Credit: <span style="color: {{ $available_credit > 0 ? 'green' : 'red' }}; font-weight:bold; font-size: large;">{{ $available_credit ?? '0.00' }}</span></li>
        </ul>
    </div>
</div>
