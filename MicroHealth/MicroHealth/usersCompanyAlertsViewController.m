//
//  usersCompanyAlertsViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/13/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "usersCompanyAlertsViewController.h"

@interface usersCompanyAlertsViewController ()<UITableViewDataSource,UITableViewDelegate>

@end

@implementation usersCompanyAlertsViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}
#pragma mark  - tableview Delegates

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    
    return 10;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
{
    float heightRow=60;
    return heightRow;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    customCellUCATableViewCell* cell = (customCellUCATableViewCell *)[tableView dequeueReusableCellWithIdentifier:@"Cell"];
    
    if (cell == nil)
    {
        NSArray *nib = [[NSBundle mainBundle] loadNibNamed:@"customCellUCATableViewCell" owner:self options:nil];
        cell = [nib objectAtIndex:0];
        [cell setSelectionStyle:UITableViewCellSelectionStyleNone];
        cell.backgroundColor=[UIColor clearColor];
    }
    
    tableView.separatorStyle = UITableViewCellSeparatorStyleSingleLine;
    
    return cell;
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
