//
//  thankYouScreenViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/12/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "thankYouScreenViewController.h"

@interface thankYouScreenViewController ()
-(IBAction)doneAction:(id)sender;
@end

@implementation thankYouScreenViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IBAction
-(IBAction)doneAction:(id)sender{
    [self.navigationController popToRootViewControllerAnimated:YES];
}
- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
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
