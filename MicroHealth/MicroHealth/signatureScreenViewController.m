//
//  signatureScreenViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/11/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "signatureScreenViewController.h"

@interface signatureScreenViewController ()
-(IBAction)cancelAction:(id)sender;
@end

@implementation signatureScreenViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IbAction
-(IBAction)cancelAction:(id)sender{
    sorryCaptureSignatureViewController *obj = [[sorryCaptureSignatureViewController alloc]initWithNibName:@"sorryCaptureSignatureViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
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
