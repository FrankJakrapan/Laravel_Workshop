<div class="sidebar">
    <div class="sidebar-header">
        <div class="text-center">99s Apartment 1.0</div>
    </div>
    <div class="sidebar-body">
        <div class="menu">
            <ul>
                <li wire:click="changeMenu('dashboard')"@if($currentMenu == 'dashboard') class="active" @endif>
                    <i class="fa-solid fa-chart-line me-2"></i>
                    Dashboard
                </li>
                <li wire:click="changeMenu('expense/index')"@if($currentMenu == 'expense/index') class="active" @endif>
                    <i class="fa-solid fa-wallet me-2"></i>
                    บันทึกค่าใช้จ่าย
                </li>
                <li wire:click="changeMenu('room')"@if($currentMenu == 'room') class="active" @endif>
                    <i class="fa-solid fa-house me-2"></i>
                    ห้องพัก
                </li>
                <li wire:click="changeMenu('customer')"@if($currentMenu == 'customer') class="active" @endif>
                    <i class="fa-solid fa-user me-2"></i>
                    Profile
                </li>
                <li wire:click="changeMenu('user/index')"@if($currentMenu == 'user/index') class="active" @endif>
                    <i class="fa-solid fa-gear me-2"></i>
                    Setting
                </li>
                <li wire:click="changeMenu('company/index')"@if($currentMenu == 'company/index') class="active" @endif>
                    <i class="fa-solid fa-building me-2"></i>
                    About Company
                </li>
            </ul>
        </div>
    </div>
</div>