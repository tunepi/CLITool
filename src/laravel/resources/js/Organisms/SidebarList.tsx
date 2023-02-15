import React from 'react';

import NavLink from '@/Atoms/NavLink';

//コマンドの種類
const sideBarTypes: Array<Array<string>> = [
    [
        'ブックマーク',
        'favorite',
        'M9 2a1 1 0 000 2h2a1 1 0 100-2H9z',
        'M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z',
    ],
    ['Git', 'gitList', 'M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z', 'M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z'],
];

const SidebarLists = () => {
    return sideBarTypes.map((sideBarType: any, index: number) => {
        return (
            <li key={index}>
                <NavLink href={route(sideBarType[1])} active={route().current(sideBarType[1])} key={sideBarType[0]}>
                    <svg
                        aria-hidden="true"
                        className="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d={sideBarType[2]}></path>
                        <path d={sideBarType[3]}></path>
                    </svg>
                    {sideBarType[0]}
                </NavLink>
            </li>
        );
    });
};

const SidebarList = (): JSX.Element => {
    return <ul className="space-y-2">{SidebarLists()}</ul>;
};

export default SidebarList;
