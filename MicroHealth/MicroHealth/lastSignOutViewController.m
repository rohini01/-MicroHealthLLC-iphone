//
//  lastSignOutViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/13/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "lastSignOutViewController.h"

@interface lastSignOutViewController (){
    IBOutlet UIWebView* webVwDeliveryInfo;
}
-(IBAction)SignOutAction:(id)sender;
@end

@implementation lastSignOutViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    NSString *embedHTML = @"<table width='100%' border='1'><tbody><tr><th></th><th>Order Timing</th>    <th>Delivery Timing</th>    <th>Home Delivery charges</th>    </tr>    <tr>    <th>Express delivery</th>    <td>Before 9 am</td>    <td>Same day 4 pm to 8 pm</td>    <td>Free</td>    </tr>    <tr>    <th>Normal delivery</th>    <td>Any time</td>    <td>Next day 10 am to 2pm or 4 pm to 8 pm</td>    <td>Free</td>    </tr>    <tr>    <th>Custom delivery</th>    <td>Any time</td>    <td>Any time</td>    <td>Free</td>    </tr>    </tbody>    </table>";
    webVwDeliveryInfo.userInteractionEnabled = NO;
    webVwDeliveryInfo.opaque = NO;
    webVwDeliveryInfo.backgroundColor=[UIColor redColor];
    //webVwDeliveryInfo.scrollView=NO;
    webVwDeliveryInfo.backgroundColor = [UIColor clearColor];
    [webVwDeliveryInfo loadHTMLString: embedHTML baseURL: nil];
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IBAction
-(IBAction)SignOutAction:(id)sender{
    signProcessAfterLogOutViewController *obj = [[signProcessAfterLogOutViewController alloc]initWithNibName:@"signProcessAfterLogOutViewController" bundle:nil];
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
