import React from 'react';
import NavLink from '@/Atoms/NavLink';

//コマンドの種類
const ManagementTypes: Array<Array<string>> = [
    ['ユーザ一覧', 'user'],
    ['Git', 'git'],
    ['Docker', 'dashboard'],
    ['Docker-Compose', 'dashboard'],
    ['Npm', 'dashboard'],
    ['Yarn', 'dashboard'],
];

const ManagementListData = (): JSX.Element[] => {
    return ManagementTypes.map((managementType: any) => {
        return (
            <div className="py-5" key={managementType[0]}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <NavLink
                                href={route(managementType[1])}
                                active={route().current(managementType[1])}
                                key={managementType[0]}
                            >
                                {managementType[0]}
                            </NavLink>
                        </div>
                    </div>
                </div>
            </div>
        );
    });
};

//jsx arrayは表示できないためjsx.elementでexportするようにしている
const ManagementLists = (): JSX.Element => {
    return <div className="hidden  sm:-my-px sm:ml-10 sm:block w-full">{ManagementListData()}</div>;
};

export default ManagementLists;
