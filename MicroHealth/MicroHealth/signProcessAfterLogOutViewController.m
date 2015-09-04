//
//  signProcessAfterLogOutViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/13/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "signProcessAfterLogOutViewController.h"

@interface signProcessAfterLogOutViewController ()
-(IBAction)SignInAct:(id)sender;
@end

@implementation signProcessAfterLogOutViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}
#pragma mark - IBAction
-(IBAction)SignInAct:(id)sender{
    usersCompanyAlertsViewController *obj = [[usersCompanyAlertsViewController alloc]initWithNibName:@"usersCompanyAlertsViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
}
/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
