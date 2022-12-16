import React from 'react';

import NavLink from '@/Atoms/NavLink';

//コマンドの種類
const sideBarTypes: Array<Array<string>> = [
    ['UserFavorite', 'dashboard'],
    ['Git', 'dashboard'],
    ['Docker', 'dashboard'],
    ['Docker-Compose', 'dashboard'],
    ['Npm', 'dashboard'],
    ['Yarn', 'dashboard'],
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
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
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
