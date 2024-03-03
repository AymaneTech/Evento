@props(['name'])

@if ($name === 'delete')
    <button type="submit">
        <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="-82.01 -82.01 646.45 646.45"
            xml:space="preserve" stroke="#ffffff" stroke-width="0.00482428">

            <g id="SVGRepo_bgCarrier" stroke-width="0">

                <rect x="-82.01" y="-82.01" width="646.45" height="646.45" rx="323.225" fill="#f10909"
                    strokewidth="0" />

            </g>

            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

            <g id="SVGRepo_iconCarrier">
                <g>
                    <g>
                        <path
                            d="M381.163,57.799h-75.094C302.323,25.316,274.686,0,241.214,0c-33.471,0-61.104,25.315-64.85,57.799h-75.098 c-30.39,0-55.111,24.728-55.111,55.117v2.828c0,23.223,14.46,43.1,34.83,51.199v260.369c0,30.39,24.724,55.117,55.112,55.117 h210.236c30.389,0,55.111-24.729,55.111-55.117V166.944c20.369-8.1,34.83-27.977,34.83-51.199v-2.828 C436.274,82.527,411.551,57.799,381.163,57.799z M241.214,26.139c19.037,0,34.927,13.645,38.443,31.66h-76.879 C206.293,39.783,222.184,26.139,241.214,26.139z M375.305,427.312c0,15.978-13,28.979-28.973,28.979H136.096 c-15.973,0-28.973-13.002-28.973-28.979V170.861h268.182V427.312z M410.135,115.744c0,15.978-13,28.979-28.973,28.979H101.266 c-15.973,0-28.973-13.001-28.973-28.979v-2.828c0-15.978,13-28.979,28.973-28.979h279.897c15.973,0,28.973,13.001,28.973,28.979 V115.744z" />
                        <path
                            d="M171.144,422.863c7.218,0,13.069-5.853,13.069-13.068V262.641c0-7.216-5.852-13.07-13.069-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C158.074,417.012,163.926,422.863,171.144,422.863z" />
                        <path
                            d="M241.214,422.863c7.218,0,13.07-5.853,13.07-13.068V262.641c0-7.216-5.854-13.07-13.07-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C228.145,417.012,233.996,422.863,241.214,422.863z" />
                        <path
                            d="M311.284,422.863c7.217,0,13.068-5.853,13.068-13.068V262.641c0-7.216-5.852-13.07-13.068-13.07 c-7.219,0-13.07,5.854-13.07,13.07v147.154C298.213,417.012,304.067,422.863,311.284,422.863z" />
                    </g>
                </g>
            </g>

        </svg>
    </button>
@elseif($name === 'update')
    <svg fill="#ffffff" height="40px" width="40px" version="1.1" id="XMLID_218_" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-7.92 -7.92 39.84 39.84" enable-background="new 0 0 24 24"
        xml:space="preserve" stroke="#ffffff">
        <g id="SVGRepo_bgCarrier" stroke-width="0">
            <rect x="-7.92" y="-7.92" width="39.84" height="39.84" rx="19.92" fill="#0dce6a" strokewidth="0">
            </rect>
        </g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <g id="update">
                <g>
                    <path
                        d="M12,24c-4.1,0-7.8-2-10-5.4V24H0v-9h9v2H3.3c1.8,3.1,5,5,8.7,5c5.5,0,10-4.5,10-10h2C24,18.6,18.6,24,12,24z M2,12H0 C0,5.4,5.4,0,12,0c4.1,0,7.8,2,10,5.4V0h2v9h-9V7h5.7c-1.8-3.1-5-5-8.7-5C6.5,2,2,6.5,2,12z">
                    </path>
                </g>
            </g>
        </g>
    </svg>
@elseif($name === 'location')
    <svg fill="#000000" width="40px" height="40px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M49,18.92A23.74,23.74,0,0,0,25.27,42.77c0,16.48,17,31.59,22.23,35.59a2.45,2.45,0,0,0,3.12,0c5.24-4.12,22.1-19.11,22.1-35.59A23.74,23.74,0,0,0,49,18.92Zm0,33.71a10,10,0,1,1,10-10A10,10,0,0,1,49,52.63Z">
            </path>
        </g>
    </svg>
@elseif($name === 'price')
    <svg fill="#000000" width="35px" height="35px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M21.5,12l-.679-8.821L12,2.5,2.5,12,12,21.5ZM14.579,6.436a2.111,2.111,0,1,1,0,2.985A2.109,2.109,0,0,1,14.579,6.436Z">
            </path>
        </g>
    </svg>
@endif
