@extends('layouts.layout_2')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>
        <ul class="list-group">
            <li class="list-group-item">if</li>
            <li class="list-group-item">foreach</li>
            <li class="list-group-item">unless</li>
            <li class="list-group-item">isset</li>
            <li class="list-group-item">empty</li>
        </ul>
    </div>
    {{-- Use if --}}

    @if (is_array($list))
        @foreach ($list as $item)
            <h2>{{ $item }}</h2>
        @endforeach
    @endif

    {{-- Use unless مالم يكن --}}
    {{-- if the available not greater than or equals 10 do .... --}}

    @unless ($available > 10)
        <div class="alert alert-warning">You should buy now..</div>
    @endunless


    {{-- Use isset instead --}}
    @isset($username)
        <p class="text-light bg-dark p-3">
            Welcome {{ $username }}
        </p>
    @else
        <p class="text-light bg-primary p-3">
            Welcome Our Guest
        </p>
    @endisset

    @empty($list)
        <p class="text-light bg-danger p-3">
            Empty List
        </p>
    @else
        <p class="text-light bg-success p-3">
            List is not empty
        </p>
    @endempty

    {{-- for auth users only --}}
    @auth
        // The user is authenticated...
    @endauth


    {{-- for guests only --}}
    @guest
        // The user is not authenticated...
    @endguest

    {{-- for admins only --}}
    @auth('admin')
        // The admin is authenticated...
    @endauth

    <hr />

    {{-- in production only --}}
    @production
        <div class="alert alert-success">
            You are online....
        </div>
    @endproduction

    <hr />

    {{-- in dev only --}}
    @env('local')
    <div class="bg-danger d-flex justify-content-center text-white align-items-center text-center position-fixed rounded-circle"
        style="bottom: 20px; right: 20px; width: 100px; height: 100px; z-index: 1000000;">DEV</div>
    @endenv

    {{-- in staging and production only --}}

    @env(['staging', 'production'])
    <div class="alert alert-warning">
        // Content for "staging" or "production" environment only
    </div>
    @endenv


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor maiores odio exercitationem distinctio quisquam,
        aliquam corrupti incidunt laborum dolore vitae facere earum ullam nostrum, dignissimos soluta tenetur eum magni
        animi saepe, ab expedita nihil. Facere nisi distinctio iste? Asperiores earum minus veritatis et numquam labore
        necessitatibus laudantium. Placeat optio enim neque ipsum perspiciatis delectus eum excepturi nam, vel, minima quam
        consectetur expedita voluptates voluptatum? Odit ducimus libero nulla cumque sequi error in maxime inventore et
        eligendi consequuntur odio a quos eius ea reprehenderit, quasi earum itaque explicabo beatae quae non. Magni ut
        quos, recusandae optio in possimus accusamus vel accusantium aspernatur explicabo alias expedita dolorum unde
        corrupti architecto dolor officiis id temporibus? Assumenda, quia. Ad eveniet aliquid cupiditate amet fuga eaque aut
        doloribus? Ratione consectetur, consequuntur hic laboriosam quidem ipsa commodi maxime odio similique perspiciatis
        porro sed culpa aliquam suscipit saepe ea iusto adipisci distinctio reiciendis non ipsam harum? Autem eaque
        accusantium impedit aliquam ab iste sit delectus, nihil minima enim! Optio, consequuntur minus. Ut cupiditate iste
        enim, autem praesentium maxime dicta ex saepe est labore? Quos rem omnis perferendis assumenda est quo sint, totam
        non! Delectus obcaecati voluptates eius expedita libero eveniet! Consectetur beatae qui vero laudantium asperiores,
        magnam ut sunt alias eaque eum autem, sapiente cumque ullam neque officiis debitis, maiores delectus. Recusandae
        corrupti id adipisci quasi repellendus quia saepe, maiores laboriosam animi tempora magnam quibusdam aspernatur
        totam! Doloribus ad sequi tenetur in quos sapiente ea, at cupiditate quae saepe id repudiandae reiciendis nihil
        eaque doloremque soluta amet ab accusamus explicabo? Repellendus eius, ab minus necessitatibus quibusdam reiciendis
        inventore rem deleniti incidunt, explicabo perspiciatis eligendi ex adipisci dignissimos accusantium reprehenderit
        aspernatur possimus dolores illum sint perferendis quasi! Pariatur saepe incidunt voluptas laborum eaque harum
        doloremque rem possimus, quae explicabo necessitatibus natus? Atque unde odio itaque nostrum. Dolores quos ullam
        fugiat ratione fuga numquam ab quasi modi iste non voluptates, vitae cupiditate molestias consequatur ducimus
        perferendis id sequi maxime nostrum repellendus, accusamus doloremque magni molestiae! Cupiditate, cumque
        repudiandae illum reprehenderit cum ullam consectetur earum, reiciendis corporis, eos dolorem perferendis
        consequatur laboriosam! Dolore, aperiam minima vel debitis similique, eius numquam voluptas ullam earum dicta qui,
        cupiditate hic adipisci maiores consequatur mollitia assumenda fugit nam. Beatae numquam obcaecati odio, dolore
        quibusdam veritatis mollitia ducimus sint atque recusandae sit aperiam excepturi unde suscipit? Perspiciatis quasi
        quaerat ex, suscipit quod ab repudiandae laudantium harum quas, eos tempore, iure nostrum modi aliquid rem aliquam!
        Esse odio eaque excepturi eligendi fuga doloribus architecto, possimus asperiores dignissimos maiores tempora quis
        voluptatum aut reiciendis quasi vel, velit obcaecati ut accusamus. Facere, laudantium possimus? Quis libero
        consequatur obcaecati odit enim excepturi doloribus vel praesentium? Non architecto minima ipsa ratione
        perspiciatis, itaque fugit suscipit tenetur voluptatem distinctio deserunt facere eum tempora, molestiae totam cum
        neque quaerat fuga praesentium reprehenderit tempore ipsam eius. Molestiae sint asperiores sequi aliquam iste
        debitis? Accusamus deleniti ipsum amet nemo alias, suscipit facilis! Incidunt eligendi quae quasi, excepturi totam
        repudiandae impedit temporibus similique quisquam nemo natus necessitatibus voluptatem minima est? Fugit, saepe!
        Aliquid unde nobis reiciendis culpa maxime dolor consectetur obcaecati repellat nihil nulla! Recusandae, laborum
        quasi alias accusamus sed iusto voluptatibus assumenda neque animi officia deleniti doloribus vel praesentium amet
        provident tempore repudiandae illo exercitationem aut facere dignissimos. Molestias adipisci, odit debitis excepturi
        molestiae magnam! Corporis molestiae officiis perferendis consequatur doloribus atque dolore, eum nostrum at cum.
        Sapiente culpa iure facere aperiam temporibus vero excepturi nam dolorem accusamus tempore inventore, recusandae
        harum et. Sint odit quidem minus a quibusdam eius, mollitia et nihil, non assumenda ab adipisci aliquam ipsum autem
        aut vero. Iste modi voluptatibus ipsam animi cupiditate iure quas cumque corporis ipsa perspiciatis ducimus dolores
        reprehenderit iusto magnam laudantium earum commodi accusamus neque explicabo velit, voluptate, esse ab laborum
        quos? Labore blanditiis eius possimus eveniet dolorum dignissimos minima aspernatur, illo quaerat repellat in, ea,
        velit iusto consectetur quas dolores odit dicta? Quas maxime nesciunt assumenda facilis perspiciatis beatae aperiam,
        totam ipsum vero velit asperiores ab qui, sequi tenetur, officia recusandae quasi quod dignissimos ipsam ducimus
        nobis nam magnam? Vel, ea? Voluptatem tempora laboriosam quisquam dolorum doloribus reprehenderit, earum ratione
        ducimus deserunt libero vitae quaerat sit corrupti aperiam totam odit cupiditate magnam omnis consectetur, unde ea
        nesciunt repellat debitis excepturi! Repellat, minima aut magni beatae consequatur in, facere, dignissimos at illum
        numquam nam tempora? Eum iure explicabo ipsam voluptates soluta, facere, illum voluptas esse accusamus nulla
        laudantium incidunt exercitationem ex quia quae alias quibusdam! Quibusdam velit quam maiores nostrum? Voluptates
        quam, qui dolore fugiat amet tenetur temporibus. Consectetur perspiciatis, at sint deleniti tempore esse debitis
        doloremque exercitationem laboriosam quos accusantium modi natus, expedita cum voluptate illum suscipit! Ex enim
        blanditiis tempora exercitationem a! Vitae, aliquid nemo sequi molestiae iure animi molestias? Quod cum inventore
        atque consequuntur nisi delectus et placeat, cumque dicta laborum facilis id. Nemo, nam repellendus? Voluptate culpa
        repellendus reprehenderit labore alias harum qui aliquid itaque aut, eos dolorum quasi molestiae magnam, autem
        expedita cupiditate neque! Amet aperiam, quis suscipit officia sapiente ab! Commodi omnis quod temporibus itaque ad
        ab cupiditate aliquid illum recusandae vel cum possimus, quasi maxime animi aliquam placeat. Repellendus quod omnis,
        quia expedita sequi consequatur, deserunt facilis corrupti velit dolores animi ullam sunt dolorem nam exercitationem
        modi harum nisi corporis quam sit molestiae aliquam distinctio eveniet adipisci? Tempora voluptatem enim placeat
        consequuntur, quo mollitia omnis repellendus in vel cum vero delectus quia eius ab quae molestias aspernatur,
        voluptate pariatur nihil dolor magnam culpa vitae veritatis nemo? Sit eligendi a veniam consequatur, dignissimos ut
        odit delectus autem ad provident voluptates repellat in odio magnam incidunt eveniet. Sequi quod numquam deleniti
        alias laborum velit! Cum, quam voluptatum? Culpa repellendus, voluptates corrupti dolore porro reiciendis libero.
        Necessitatibus, neque officia repellat totam quisquam molestias debitis ea. Nemo, repellat at optio, necessitatibus
        officiis nostrum ut neque sapiente temporibus atque asperiores consectetur deserunt libero, facilis aliquam dolore
        sit molestias tempora cupiditate enim omnis beatae minima debitis! Dolorem, ipsa recusandae non labore fugit natus,
        nobis sequi nesciunt perferendis possimus porro ad nihil asperiores. Repellat quos optio quasi debitis architecto
        repellendus magnam aut corrupti soluta amet.</p>
@endsection
