<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //GitMasterDataSeeder
            // GitSeeder::class,
            // GitOptionMasterDataSeeder
            GitOptionConfigSeeder::class,
            GitOptionGitSeeder::class,
            GitOptionHelpSeeder::class,
            GitOptionBugreportSeeder::class,
            GitOptionInitSeeder::class,
            GitOptionCloneSeeder::class,
            GitOptionAddSeeder::class,
            GitOptionStatusSeeder::class,
            GitOptionDiffSeeder::class,
            GitOptionCommitSeeder::class,
            GitOptionNotesSeeder::class,
            GitOptionRestoreSeeder::class,
            GitOptionResetSeeder::class,
            GitOptionRmSeeder::class,
            GitOptionMvSeeder::class,
            GitOptionBranchSeeder::class,
            GitOptionCheckoutSeeder::class,
            GitOptionSwitchSeeder::class,
            GitOptionMergeSeeder::class,
            GitOptionMergeToolSeeder::class,
            GitOptionLogSeeder::class,
            GitOptionStashSeeder::class,
            GitOptionTagSeeder::class,
            GitOptionWorktreeSeeder::class,
            GitOptionFetchSeeder::class,
            GitOptionPullSeeder::class,
            GitOptionPushSeeder::class,
            GitOptionRemoteSeeder::class,
            GitOptionSubmoduleSeeder::class,
            GitOptionShowSeeder::class,
            GitOptionRangeDiffSeeder::class,
            GitOptionShortLogSeeder::class,
            GitOptionDescribeSeeder::class,
            GitOptionApplySeeder::class,
            GitOptionCherryPickSeeder::class,
            GitOptionRebaseSeeder::class,
            GitOptionRevertSeeder::class,
            GitOptionBisectSeeder::class,
            GitOptionBlameSeeder::class,
            GitOptionGrepSeeder::class,
            GitOptionAmSeeder::class,
            GitOptionFormatPatchSeeder::class,
            GitOptionSendEmailSeeder::class,
            GitOptionRequestPullSeeder::class,
            GitOptionSvnSeeder::class,
            GitOptionFastImportSeeder::class,
            GitOptionCleanSeeder::class,
            GitOptionGcSeeder::class,
            GitOptionFsckSeeder::class,
            GitOptionReflogSeeder::class,
            GitOptionInstawebSeeder::class,
            GitOptionArchiveSeeder::class,
            GitOptionBundleSeeder::class,
            GitOptionDaemonSeeder::class,
            GitOptionUpdateServerInfoSeeder::class,
            GitOptionCatFileSeeder::class,
            GitOptionCheckIgnoreSeeder::class,
            GitOptionCheckoutIndexSeeder::class,
            GitOptionCountObjectsSeeder::class,
            GitOptionDiffIndexSeeder::class,
            GitOptionForEachRefSeeder::class,
            GitOptionHashObjectSeeder::class,
            GitOptionlsFilesSeeder::class,
            GitOptionlsTreeSeeder::class,
            GitOptionMergeBaseSeeder::class,
            GitOptionReadTreeSeeder::class,
            GitOptionRevListSeeder::class,
            GitOptionRevParseSeeder::class,
            GitOptionShowRefSeeder::class,
            GitOptionSymbolicRefSeeder::class,
            GitOptionUpdateIndexSeeder::class,
            GitOptionVerifyPackSeeder::class,
            GitOptionWriteTreeSeeder::class,
        ]);
    }
}
