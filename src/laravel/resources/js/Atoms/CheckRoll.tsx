//ロールの表示制御
const checkRoll = (roll: string): string => {
    return roll == '1' ? '管理者' : '一般';
};

export default checkRoll;
