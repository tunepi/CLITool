import React from 'react';
import Table from '@/Moleclues/Table';
import { TableGitArray, TableUserArray, TableGitOptionArray } from '../type';

interface Props {
    th: Array<string>;
    tds: TableGitArray[] | TableUserArray[] | TableGitOptionArray[];
    children?: JSX.Element;
}

const MainTableLayout = ({ th, tds, children }: Props) => {
    return (
        <div className="pt-5">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6 bg-white border-b border-gray-200 flex justify-center">
                        <Table>
                            <Table.TableHeader th={th} />
                            <Table.TableRow tds={tds} target={th} />
                        </Table>
                    </div>
                    {children}
                </div>
            </div>
        </div>
    );
};

export default MainTableLayout;
