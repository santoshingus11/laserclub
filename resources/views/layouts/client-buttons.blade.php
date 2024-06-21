<nav class="menu" id="navi">
    <span class="nav-itemi {{ $page == 'sports' ? ' active' : '' }}">
        <span class="icon">
            <i data-feather="home"></i>
        </span>
        <a href="{{url('/sports')}}">Sports</a>
    </span>
    <span class="nav-itemi {{ $page == 'casino' ? ' active' : '' }}">
        <span class="icon">
            <i data-feather="home"></i>
        </span>
        <a href="{{url('/')}}">Casino</a>
    </span>
    <span class="nav-itemi {{ $page == 'live_casino' ? ' active' : '' }}">
        <span class="icon">
            <i data-feather="search"></i>
        </span>
        <a href="{{url('/live/casino/games')}}">Live Casino</a>
    </span>
    <!--<span class="nav-itemi {{ $page == 'sport_betting' ? ' active' : '' }}">-->
    <!--    <span class="icon">-->
    <!--        <i data-feather="search"></i>-->
    <!--    </span>-->
    <!--    <a href="{{url('/live/casino/games/sportBetting')}}">Live Cricket</a>-->
    <!--</span>-->
    <span class="nav-itemi {{ $page == 'aviator_jetx' ? ' active' : '' }}">
        <span class="icon">
            <i data-feather="search"></i>
        </span>
        <a href="{{url('/live/casino/games/aviator/jetx')}}">Aviator & Jetx</a>
    </span>
    
</nav>


<style>
  * {
        box-sizing: border-box;
    }

     #navi {
        display: flex;
        overflow-x: auto; /* Enable horizontal scrolling */
        padding: 10px;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        border-radius: 1px;
        background-image: linear-gradient(rgb(48, 48, 48) 13%, rgb(30, 30, 30) 40%, #0c0d11 86%);
        color: rgba(255, 255, 255, 0.6);
        text-shadow: 0 -2px 0 black;
        cursor: pointer;
        box-shadow: 1px 2px 4px rgb(20, 20, 20), 0 4px 12px rgb(10, 10, 10);
    }

    .nav-itemi {
        flex-direction: row-reverse;
        font-size: 0.8999rem;
        line-height: 1rem;
        align-items: center;
        min-width: 120px;
        justify-content: space-between;
        transition: all 80ms ease;
        &.active {
            border-radius: 6px;
            color: black;
            background-color: white;
            text-shadow: 0 0 3px hsla(260, 100%, 70%, 0.7);
        }
        &:not(.active):hover {
            color: rgba(255, 255, 255, 0.87);
        }
        &:hover > .icon .subicon {
            height: 32px;
            width: 32px;
            border-radius: 32px;
            top: -16px;
            right: -16px;
            border-color: white;
        }
        &:not(:first-of-type) {
            border-left: 1px solid rgb(60, 60, 60);
        }
        &:not(:last-of-type) {
            border-right: 0.1rem solid black;
        }
        a {
            color: inherit;
            text-decoration: none;
            padding: 1ch;
        }
        .icon {
            padding: 1ch;
            position: relative;
            .subicon {
                text-shadow: none;
                transition: all 40ms ease;
                position: absolute;
                top: -3px;
                right: -3px;
                background: red;
                color: white;
                box-shadow: 0 0 4px rgba(41, 41, 41, 0.405);
                width: 18px;
                height: 18px;
                border-radius: 14px;
                font-size: 0.7em;
                font-weight: 700;
                display: inline-grid;
                place-items: center;
                border: 2px solid mix(white, red);
            }
        }
        .icon > svg {
            max-width: 16px;
        }
    }

    /* Media Query for Small Screens */
    @media only screen and (max-width: 600px) {
        .nav-itemi {
            flex: 0 0 auto; /* Allow items to shrink to fit the container */
        }
    }
</style>